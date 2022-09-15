<?php

namespace App\HelperModules;

use App\Models\Person\Person;
use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelperModule
{
    /**
     * @param null $data
     * @param null $message
     * @param null $status
     * @return Response
     */
    static function jsonResponse($data = null, $message = null, $status = null): Response
    {
        return response([
            'data' => $data,
            'message' => $message,
            'status' => $status
        ]);
    }

    /**
     * @param $request
     * @return array|string|string[]
     */
    static function phoneRemoveSpace($request)
    {
        $pattern = '/\s*/m';
        $replace = '';
        $message = $request->phone;
        $removedLinebaksAndWhitespace = preg_replace($pattern, $replace, $message);
        $firstReplace = str_replace('-', '', $removedLinebaksAndWhitespace);
        $secondReplace = str_replace('(', '', $firstReplace);
        return str_replace(')', '', $secondReplace);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    static function createPerson(Request $request)
    {
        return Person::create([
            'first_name' => $request->firstname ?? null,
            'last_name' => $request->lastname ?? null,
            'phone' => $request->phone ?? null,
            'dob' => $request->dob ?? null,
            'address' => $request->address ?? null,
            'city' => $request->city ?? null,
            'state' => $request->state ?? null,
            'zip' => $request->zip ?? null,
            'created_by' => auth()->user()->id ?? null,
            'updated_by' => auth()->user()->id ?? null,
        ]);
    }

    static function createUser(Request $request)
    {
        return User::create([
            'username' => $request->username ?? null,
            'email' => $request->email ?? null,
            'person_id' => $request->person_id ?? null,
            'password' => $request->password ?? null,
            'status' => $request->status ?? 1,
            'type' => $request->type ?? 'Admin',
            'type_reference_id' => $request->type_reference_id ?? null,
            'created_by' => auth()->user()->id ?? null,
            'updated_by' => auth()->user()->id ?? null,
        ]);
    }
}
