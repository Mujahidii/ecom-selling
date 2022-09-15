<?php

namespace App\Models\Person;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'dob',
        'address',
        'city',
        'state',
        'zip',
        'created_by',
        'updated_by',
    ];

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = isset($value) ? Carbon::parse($value)->toDateTimeString() : Carbon::now()->toDateTimeString();
    }


}
