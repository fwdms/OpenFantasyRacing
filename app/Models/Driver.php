<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Driver extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'name'
    ];

    public function constructor()
    {
        return $this->belongsTo(Constructor::class, 'constructor_id');
    }
}
