<?php

namespace Database\Factories;

use App\Models\Seo;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'meta_title' => $this->faker->unique()->text(15),
            'meta_author' => $this->faker->unique()->text(15),
            'meta_tag' => $this->faker->unique()->text(15),
            'meta_description' => $this->faker->unique()->text(20),
            'meta_analytics' => $this->faker->unique()->text(20),
            'bing_analytics' => $this->faker->unique()->text(20),
        ];
    }
}
