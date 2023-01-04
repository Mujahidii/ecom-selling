<?php

namespace App\Repository\Eloquent;

use Illuminate\Http\Request;

interface UserInterface
{
    public function store(Request $request);
}
