<?php

namespace App\Models\Person;

use App\Models\Person\traits\Validation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory, Validation;

    protected $table = 'persons';

    protected $casts = ['dob' => 'date:Y-m-d'];

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'dob',
        'address',
        'city',
        'state',
        'zip',
        'id_card',
        'created_by',
        'updated_by',
    ];
}
