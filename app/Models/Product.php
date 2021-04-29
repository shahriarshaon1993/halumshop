<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'category_id', 'subcategory_id', 'brand_id', 'product_title', 'slug', 'product_code', 'product_quantity', 'product_details', 'product_color', 'product_size', 'selling_price', 'discount_price', 'video_link', 'main_slider', 'hot_deal', 'buyone_getone', 'best_rated', 'hot_new', 'trand', 'image_one', 'image_two', 'image_three', 'status'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($product) {
            $product->slug = Str::slug($product->product_title);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
