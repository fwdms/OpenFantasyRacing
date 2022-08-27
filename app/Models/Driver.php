<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 */
class Driver extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    public function constructor(): BelongsTo
    {
        return $this->belongsTo(Constructor::class, 'constructor_id');
    }
    
    public function results(): HasMany
    {
        return $this->hasMany(Result::class, 'driver_id');
    }
    
    public function points()
    {
        return $this->hasMany(Result::class, 'driver_id')
            ->withSum('points_for_race');
    }
}
