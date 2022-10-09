<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 * @property int $id
 */
class League extends Model
{
    use HasFactory;
    
    protected $table = 'leagues';
    
    protected $guarded = ['id'];
    
    public function fantasyTeams(): HasMany
    {
        return $this->hasMany(FantasyTeam::class, 'league_id')
            ->with('User');
    }
    
    public function franchise(): BelongsTo
    {
        return $this->belongsTo(Franchise::class, 'franchise_id');
    }
}
