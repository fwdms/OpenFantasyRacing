<?php

namespace Database\Factories;

use App\Models\Franchise;
use Illuminate\Database\Eloquent\Factories\Factory;

class FranchiseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Franchise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'governing_body' => $this->faker->text(5),
        ];
    }
}
