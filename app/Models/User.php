<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Safadi\EloquentJoinWith\Database\Concerns\JoinWith;

class User extends Model
{
    use HasFactory, JoinWith;

    public $timestamps = false;

    /**
     * Get the profile associated with the user.
     */
    public function profile(): HasOne
    {
        return $this
            ->hasOne(Profile::class, 'user_id', 'id');
    }

    /**
     * Get the profile with default associated with the user.
     */
    public function profileWithDefault(): HasOne
    {
        return $this
            ->hasOne(Profile::class, 'user_id', 'id')
            ->withDefault([
                'type' => 'seller',
            ]);
    }
}
