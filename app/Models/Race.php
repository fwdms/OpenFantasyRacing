<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [];

    public function track()
    {
        return $this->hasMany(Track::class, 'id', 'track_id');
    }
}
