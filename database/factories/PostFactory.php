<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'postcategory_id' => PostCategory::all()->random()->id,
            'admin_id' => Admin::all()->random()->id,
            'title_en' => $this->faker->unique()->text(30),
            'title_bn' => $this->faker->unique()->text(30),
            'description_en' => $this->faker->realText(),
            'description_bn' => $this->faker->realText(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
