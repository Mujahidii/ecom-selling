<?php

namespace App\Http\Controllers\User;

use App\HelperModules\HelperModule;
use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Repository\BuyerRepo;
use App\Repository\PersonRepo;
use App\Repository\SellerRepo;
use App\Repository\UserRepo;
use App\Utilities\Constant;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected User $user;
    protected PersonRepo $personRepo;
    protected BuyerRepo $buyerRepo;
    protected SellerRepo $sellerRepo;
    protected UserRepo $userRepo;

    public function __construct()
    {
        $this->user = new User();
        $this->personRepo = new PersonRepo();
        $this->buyerRepo = new BuyerRepo();
        $this->sellerRepo = new SellerRepo();
        $this->userRepo = new UserRepo();
    }

    public function index()
    {
        try {
            $users = User::all();
            return view('user.index', compact('users'));
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        return view('user.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $validation = Validator::make($request->all(), $this->user->rules());
            if ($validation->fails()) {
                return redirect()->back()->with('error', $validation->errors()->first())->withInput();
            }
            $phone = HelperModule::phoneRemoveSpace($request);
            $request->merge(['phone' => $phone]);
            DB::beginTransaction();
            $person = $this->personRepo->store($request);
            $type_reference_id = null;
            if ($request->type = Constant::user['buyer']) {
                $buyer = $this->buyerRepo->store($request);
                $type_reference_id = $buyer->id;
            } elseif ($request->type = Constant::user['seller']) {
                $seller = $this->sellerRepo->store($request);
                $type_reference_id = $seller->id;
            }
            $request->request->add(['person_id' => $person->id, 'type' => $request->type, 'type_reference_id' => $type_reference_id ?? null]);
            $this->userRepo->store($request);
            DB::commit();
            return redirect()->to('/login')->with('success', Lang::get('messages.created', ['attribute' => 'User']));
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('user.create')->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * @param $userId
     * @return RedirectResponse
     */
    public function destroy($userId): RedirectResponse
    {
        try {
            User::findOrFail($userId)->delete();
            return redirect()->route('user.list')->with('success', 'User Deleted Successfully.');
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }
}
