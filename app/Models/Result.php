<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * @mixin Builder
 * @property int $id
 */
class Result extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    public function calculatePoints(Request $request): int
    {
        $value = match ($request->finish_pos) {
            1 => 25,
            2 => 18,
            3 => 15,
            4 => 12,
            5 => 10,
            6 => 8,
            7 => 6,
            8 => 4,
            9 => 2,
            10 => 1,
            default => 0,
        };
        
        if($request->fastest_lap === true) {
            $value = $value + 1;
        }
        
        return $value;
    }
    
    public function race(): HasMany
    {
        return $this->hasMany(Race::class, 'id', 'race_id')
            ->with('track')
            ->orderBy('round_number');
    }
    
    public function track(): HasManyThrough
    {
        return $this->hasManyThrough(Track::class, Race::class, 'track_id');
    }
    
    public function driver(): HasOne
    {
        return $this->hasOne(Driver::class, 'id', 'driver_id')
            ->with('constructor');
    }
}
