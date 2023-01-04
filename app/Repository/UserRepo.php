<?php

namespace App\Repository;

use App\Models\User\User;
use App\Repository\Eloquent\UserInterface;
use Illuminate\Http\Request;

class UserRepo implements UserInterface
{
    /**
     * @param Request $request
     * @return User
     */
    public function store(Request $request): User
    {
        return User::create([
            'username' => $request->username ?? null,
            'email' => $request->email ?? null,
            'person_id' => $request->person_id ?? null,
            'password' => $request->password ?? null,
            'status' => $request->status ?? 1,
            'type' => $request->type,
            'type_reference_id' => $request->type_reference_id ?? null,
            'created_by' => auth()->user()->id ?? null,
            'updated_by' => auth()->user()->id ?? null,
        ]);
    }
}
