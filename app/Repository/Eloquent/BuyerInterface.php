<?php

namespace App\Repository\Eloquent;

use Illuminate\Http\Request;

interface BuyerInterface
{
    public function store(Request $request);
}
