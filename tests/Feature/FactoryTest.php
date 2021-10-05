<?php

namespace Tests\Feature;

use App\Models\Franchise;
use App\Models\League;
use App\Models\User;
use App\Models\Rule;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FactoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_be_created()
    {
        User::factory()->create();

        $this->assertDatabaseCount('users', 1);
    }

    /** @test */
    public function franchise_can_be_created()
    {
        Franchise::factory()->create();

        $this->assertDatabaseCount('franchises', 1);
    }

    /** @test */
    public function a_league_can_be_created()
    {
        $user = User::factory()->create();
        $franchise = Franchise::factory()->create();

        League::factory()->create([
            'franchise_id' => $franchise->id,
            'league_owner_id' => $user->id
        ]);

        $this->assertDatabaseCount('leagues', 1);
    }

    /** @test */
    public function a_rule_can_be_added_to_a_league()
    {
        $user = User::factory()->create();
        $franchise = Franchise::factory()->create();
        $league = League::factory()->create([
            'franchise_id' => $franchise->id,
            'league_owner_id' => $user->id
        ]);

        Rule::factory()->create([
            'league_id' => $league->id,
        ]);

        $this->assertDatabaseCount('rules', 1);
    }
}
