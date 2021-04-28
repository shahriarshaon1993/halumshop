<?php

namespace Database\Factories;

use App\Models\Newslater;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewslaterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Newslater::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->email,
        ];
    }
}
