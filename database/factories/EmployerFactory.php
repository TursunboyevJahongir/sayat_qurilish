<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Employer;
use App\Models\Posts;
use App\Models\Slideshow;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'image_url' => $this->faker->imageUrl(),
            'role' => $this->faker->title,

        ];
    }
}
