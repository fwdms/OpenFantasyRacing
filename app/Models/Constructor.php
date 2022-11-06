<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * @mixin Builder
 *
 * @property int $id
 */
class Constructor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function franchise(): BelongsTo
    {
        return $this->belongsTo(Franchise::class);
    }

    public function drivers(): HasMany
    {
        return $this->hasMany(Driver::class)->with('results');
    }

    public function results(): HasManyThrough
    {
        return $this->hasManyThrough(Result::class, Driver::class);
    }
}
