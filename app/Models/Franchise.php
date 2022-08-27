<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin Builder
 * @property $id
 * @property $franchise_slug
 */
class Franchise extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    public function constructors(): HasMany
    {
        return $this->hasMany(Constructor::class, 'franchise_id');
    }
}
