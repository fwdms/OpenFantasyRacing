<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin Builder
 * @property int $id
 */
class Race extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [];

    public function track(): HasMany
    {
        return $this->hasMany(Track::class, 'id', 'track_id');
    }
}
