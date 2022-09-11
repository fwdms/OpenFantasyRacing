<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * @mixin Builder
 * @property int $id
 * @property string $franchise_slug
 * @property array $constructors
 */
class Franchise extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    public function constructors(): HasMany
    {
        return $this->hasMany(Constructor::class, 'franchise_id');
    }
    
    public function drivers(): HasManyThrough
    {
        return $this->hasManyThrough(
            Driver::class,
            Constructor::class,
            'franchise_id',
            'constructor_id'
        );
    }
}
