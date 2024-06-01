<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Safadi\EloquentJoinWith\Database\Concerns\JoinWith;

class City extends Model
{
    use HasFactory, JoinWith;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country_id'
    ];

    /**
     * Get the country that owns the city.
     */
    public function country(): BelongsTo
    {
        return $this
            ->belongsTo(Country::class, 'country_id', 'id')
            ->withDefault();
    }
}
