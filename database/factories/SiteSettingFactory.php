<?php

namespace Database\Factories;

use App\Models\SiteSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SiteSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone' => "+880 1723771208",
            'email' => "info@haluumshop.com",
            'company_name' => "HalumShop",
            "company_address" => "Katashur Mohammadpur, Dhaka-1207",
            'facebook' => "https://www.facebook.com/",
            'youtube' => "https://www.youtube.com/channel/UC_pDY4JZnlvzT-wHCJEqpOw",
            'instagram' => "https://www.instagram.com/",
            'pinterest' => "https://www.pinterest.com/",
        ];
    }
}
