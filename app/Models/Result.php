<?php

namespace App\Models;

use App\Models\Race;
use App\Models\Track;
use App\Models\Driver;
use App\Models\Constructor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected $fillable = [];

    public function race()
    {
        return $this->hasMany(Race::class, 'id', 'race_id')->with('track')->orderBy('round_number');
    }

    public function track()
    {
        return $this->hasManyThrough(Track::class, Race::class, 'track_id');
    }

    public function driver()
    {
        return $this->hasOne(Driver::class, 'id', 'driver_id')->with('constructor');
    }
}
