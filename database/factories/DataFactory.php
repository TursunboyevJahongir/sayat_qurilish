<?php

namespace Database\Factories;

use App\Models\Data;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Data::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'workers_count' => $this->faker->randomNumber(),
            'projects_count' => $this->faker->randomNumber(),
            'about' => $this->faker->text(300),
            'firm_year' => 2004
        ];
    }
}
