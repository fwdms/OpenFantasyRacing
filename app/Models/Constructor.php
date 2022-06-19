<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constructor extends Model
{
    use HasFactory;

    public function franchise()
    {
        return $this->belongsTo(Franchise::class);
    }

    public function drivers()
    {
        return $this->hasMany(Driver::class)->with('results');
    }

    public function results()
    {
        return $this->hasManyThrough(Result::class, Driver::class);
    }
}
