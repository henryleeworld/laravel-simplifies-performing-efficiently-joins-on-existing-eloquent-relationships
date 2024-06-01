<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Safadi\EloquentJoinWith\Database\Concerns\JoinWith;

class Profile extends Model
{
    use HasFactory, JoinWith;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'city_id',
        'type'
    ];

    public $timestamps = false;

    /**
     * Get the user that owns the profile.
     */
    public function user(): BelongsTo
    {
        return $this
            ->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the city that owns the profile.
     */
    public function city(): BelongsTo
    {
        return $this
            ->belongsTo(City::class, 'city_id', 'id')
            ->withDefault();
    }
}
