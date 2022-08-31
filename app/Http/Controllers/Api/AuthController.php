<?php

namespace App\Http\Controllers\Api;

use App\HelperModules\HelperModule;
use App\Http\Controllers\Controller;
use App\Http\Resources\AuthResource;
use App\Models\User\User;
use App\Utilities\Constant;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function createUser(Request $request): Response
    {
        try {
            $validator = Validator::make($request->all(), [
                'username' => ['required', Rule::unique('users', 'username')],
                'email' => ['required', Rule::unique('users', 'email')],
                'password' => 'required',
                'type' => 'required',
            ]);

            if ($validator->fails()) {
                return HelperModule::jsonResponse(null, $validator->errors()->first(), Constant::Unauthorized);
            }
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'type' => $request->type,
            ]);
            $token = $user->createToken('Api Token')->plainTextToken;
            return HelperModule::jsonResponse(new AuthResource($token), 'User created Successfully', Constant::OK);
        } catch (Exception $e) {
            return HelperModule::jsonResponse(null, $e->getMessage(), Constant::ExpectationFailed);
        }
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function loginUser(Request $request): Response
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if ($validator->fails()) {
                return HelperModule::jsonResponse(null, $validator->errors()->first(), Constant::Unauthorized);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {
                return HelperModule::jsonResponse(null, $validator->errors()->first(), Constant::Unauthorized);
            }
            $user = User::where('email', $request->email)->firstOrFail();
            $token = $user->createToken("API TOKEN")->plainTextToken;
            return HelperModule::jsonResponse(new AuthResource($token), 'User Logged In Successfully', Constant::OK);

        } catch (ModelNotFoundException $e) {
            return HelperModule::jsonResponse(null, $e->getMessage(), Constant::NotFound);
        } catch (Exception $e) {
            return HelperModule::jsonResponse(null, $e->getMessage(), Constant::InternalServerError);
        }
    }
}
