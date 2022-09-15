<?php

namespace App\Http\Controllers\User;

use App\HelperModules\HelperModule;
use App\Http\Controllers\Controller;
use App\Models\Person\Person;
use App\Models\User\User;
use App\Utilities\Constant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        return view('user.create');
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
                return redirect()->back()->with('error', $validation->errors()->first());
            }
            $phone = HelperModule::phoneRemoveSpace($request);
            $request->merge(['phone' => $phone]);
            DB::beginTransaction();
            $person = HelperModule::createPerson($request);
//            $person = Person::create($request->only('first_name', 'last_name', 'phone', 'dob', 'address', 'city', 'state', 'zip', 'created_by', 'updated_by'));
            $request->request->add(['person_id' => $person->id, 'type' => $request->type ?? 'admin']);
//            if ($request->type = 'Buyer') {
//
//            } elseif ($request->type = 'Seller') {
//
//            }
            HelperModule::createUser($request);
//            $this->user->create($request->only('username', 'email', 'person_id', 'password', 'status', 'type'));
            DB::commit();
            return redirect()->to('/login')->with('success', Lang::get('messages.created', ['attribute' => 'User']));
        } catch (\Exception $e) {
            return redirect()->route('user.create')->with('error', $e->getMessage());
        }
    }
}
