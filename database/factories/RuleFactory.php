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
            'maxNumberOfDriversPerTeam' => $this->faker->randomNumber([1-10]),
            'canChooseFromSameTeam' => $this->faker->boolean(50),
            'canChooseFromSameTopTeam' => $this->faker->boolean(50),
            'pointsOnlyAccruedIfDriverInSeat' => $this->faker->boolean(50),
        ];
    }
}
