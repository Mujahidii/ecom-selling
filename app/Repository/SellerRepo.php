<?php

namespace App\Repository;

use App\Models\seller\Seller;
use App\Repository\Eloquent\SellerInterface;
use Illuminate\Http\Request;

class SellerRepo implements SellerInterface
{

    /**
     * @param Request $request
     * @return Seller
     */
    public function store(Request $request): Seller
    {
        return Seller::create([
            'name' => $request->firstname . ' ' . $request->lastname,
        ]);
    }
}
