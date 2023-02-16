<?php

namespace App\Models\Category;

use App\Models\Category\traits\Relations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, Relations;

    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'status',
        'channel_type',
        'created_by',
        'updated_by',
    ];
}
