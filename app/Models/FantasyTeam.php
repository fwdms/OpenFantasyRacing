<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class FantasyTeam extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function league(): BelongsTo
    {
        return $this->belongsTo(League::class, 'league_id')
            ->with('Franchise');
    }

    public function drivers(): HasManyThrough
    {
        return $this->hasManyThrough(Driver::class, FantasyTeamDrivers::class, 'fantasy_team_id', 'id');
    }
}
