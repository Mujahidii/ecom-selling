<?php

namespace App\Models\Category\traits;

use App\Models\User\User;
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
}
