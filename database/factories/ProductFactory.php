<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::all()->random()->id,
            'brand_id' => Brand::all()->random()->id,
            'product_title' => $this->faker->unique()->text(30),
            'product_code' => random_int(1000, 9000),
            'product_quantity' => random_int(1, 100),
            'product_details' => $this->faker->realText(),
            'product_color' => $this->faker->colorName,
            'product_size' => random_int(11, 14),
            'selling_price' => random_int(1100, 2000),
            'discount_price' => random_int(500, 1000),
            'video_link' => $this->faker->imageUrl(),
            'image_one' => $this->faker->imageUrl(),
            'image_two' => $this->faker->imageUrl(),
            'image_three' => $this->faker->imageUrl(),
        ];
    }
}
