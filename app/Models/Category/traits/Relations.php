<?php

namespace App\Models\Category\traits;

use App\Models\Category\Category;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait Relations
{
    /**
     * @return HasOne
     */
    public function created_by_user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    /**
     * @return HasOne
     */
    public function updated_by_user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'updated_by');
    }

    /**
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * @return HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
