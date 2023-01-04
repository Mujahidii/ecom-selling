<?php

namespace App\Repository;

use App\Models\Person\Person;
use App\Repository\Eloquent\PersonInterface;
use Illuminate\Http\Request;

class PersonRepo implements PersonInterface
{
    /**
     * @param Request $request
     * @return Person
     */
    public function store(Request $request): Person
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
            'id_card' => $request->id_card ?? null,
            'created_by' => auth()->user()->id ?? null,
            'updated_by' => auth()->user()->id ?? null,
        ]);
    }
}
