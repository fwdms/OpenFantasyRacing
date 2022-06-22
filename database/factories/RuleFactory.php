<?php

namespace Database\Factories;

use App\Models\Rule;
use Illuminate\Database\Eloquent\Factories\Factory;

class RuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'max_number_of_drivers_per_team' => $this->faker->randomNumber([1 - 10]),
            'can_choose_from_same_team' => $this->faker->boolean(50),
            'can_choose_from_same_top_team' => $this->faker->boolean(50),
            'points_only_accrued_if_driver_in_seat' => $this->faker->boolean(50),
        ];
    }
}
