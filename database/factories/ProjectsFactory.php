<?php

namespace Database\Factories;

use App\Models\Projects;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company,
            'image_url' => $this->faker->imageUrl(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'hidden' => false,
            'description' => $this->faker->realText(500),
            'short_description' => $this->faker->text(),
            'address' => $this->faker->address
         ];
    }
}
