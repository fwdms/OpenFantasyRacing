<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Driver extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['first_name', 'last_name'];

    public function constructor(): BelongsTo
    {
        return $this->belongsTo(Constructor::class, 'constructor_id');
    }

    public function results(): HasMany
    {
        return $this->hasMany(Result::class, 'driver_id');
    }
}
