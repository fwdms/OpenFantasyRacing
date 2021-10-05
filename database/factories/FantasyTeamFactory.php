<?php

namespace Database\Factories;

use App\Models\FantasyTeam;
use Illuminate\Database\Eloquent\Factories\Factory;

class FantasyTeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FantasyTeam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team_name' => $this->faker->name,
            'points' => $this->faker->randomNumber([0, 400]),
            'logo' => $this->faker->imageUrl()
        ];
    }
}
