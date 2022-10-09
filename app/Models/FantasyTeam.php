<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/* @mixin Builder
 * @property int $id
 */
class FantasyTeam extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function League(): BelongsTo
    {
        return $this->belongsTo(League::class, 'league_id')
            ->with('Franchise');
    }
    
    public function drivers(): HasManyThrough
    {
        return $this->hasManyThrough(Driver::class, FantasyTeamDrivers::class, 'fantasy_team_id', 'id');
    }
}
