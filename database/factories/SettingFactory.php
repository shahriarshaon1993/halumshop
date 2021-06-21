<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vat' => 15,
            'shipping_charge' => '30',
            'shopname' => 'halumShop',
            'email' => 'info@halumshop@gmail.com',
            'phone' => '+880 1723771208',
            'address' => '60-49 Road 11378 New York',
            'logo' => $this->faker->imageUrl()
        ];
    }
}
