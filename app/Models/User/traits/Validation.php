<?php

namespace App\Models\User\traits;

use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

trait Validation
{
    /**
     * @return array
     */
    static function rules(): array
    {
        return [
            'username' => ['required', Rule::unique('users', 'username')],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'status' => 'required',
            'phone' => 'required|min:11',
            'dob' => 'required|date|date_format:Y-m-d',
            'state' => 'required',
            'zip' => 'required',
            'address' => 'required',
            'city' => 'required',
            'type' => 'required'
        ];
    }
}
