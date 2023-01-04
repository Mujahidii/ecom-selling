<?php

namespace App\Repository\Eloquent;

use Illuminate\Http\Request;

interface SellerInterface
{
    public function store(Request $request);
}
