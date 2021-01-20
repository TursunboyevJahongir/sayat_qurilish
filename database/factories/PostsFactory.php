<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'category_id' => $this->faker->randomElement(Category::query()->select('id')->get()->all()),
            'description' => $this->faker->realText(2048),
            'image_url' => $this->faker->imageUrl()
        ];
    }
}
