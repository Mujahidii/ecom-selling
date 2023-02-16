<?php

namespace App\Models\User\traits;

use App\Models\Category\Category;
use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait Relations
{
    public function person(): HasOne
    {
        return $this->hasOne(Person::class, 'id', 'person_id');
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class, 'created_by', 'id');
    }
}
