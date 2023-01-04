<?php

namespace App\Repository\Eloquent;

use Illuminate\Http\Request;

interface PersonInterface
{
    public function store(Request $request);
}
