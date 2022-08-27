<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

/* @mixin Builder */
class League extends Model
{
    use HasFactory;
    
    protected $table = 'leagues';
    
    protected $guarded = ['id'];
    
    public function __construct(array $attributes = ['id'])
    {
        parent::__construct($attributes);
    }
    
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
