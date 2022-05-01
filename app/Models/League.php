<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $table = 'leagues';

    protected $guarded = [];

    protected $fillable = [];

    public function FantasyTeams()
    {
        return $this->hasMany(FantasyTeam::class, 'league_id');
    }
}
