<?php

namespace App\Repository;

use App\Models\buyer\Buyer;
use App\Repository\Eloquent\BuyerInterface;
use Illuminate\Http\Request;

class BuyerRepo implements BuyerInterface
{
    /**
     * @param Request $request
     * @return Buyer
     */
    public function store(Request $request): Buyer
    {
        return Buyer::create([
            'name' => $request->firstname . ' ' . $request->lastname,
        ]);
    }
}
