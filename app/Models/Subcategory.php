<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = "subcategories";

    protected $fillable = [
        'name', 'slug', 'category_id'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($subcategory) {
            $subcategory->slug = Str::slug($subcategory->name);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
