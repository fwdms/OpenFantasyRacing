<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Driver extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['first_name', 'last_name'];

    public function constructor()
    {
        return $this->belongsTo(Constructor::class, 'constructor_id');
    }

    public function results()
    {
        return $this->hasMany(Result::class, 'driver_id', 'id');
    }
}
