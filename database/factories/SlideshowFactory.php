<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Posts;
use App\Models\Slideshow;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlideshowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slideshow::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'image_url' => $this->faker->imageUrl()
        ];
    }
}
