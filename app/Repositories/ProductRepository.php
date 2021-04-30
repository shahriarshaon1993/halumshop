<?php

namespace App\Repositories;

use App\Interface\ProductInterface;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Image;

class ProductRepository implements ProductInterface
{
    public function index()
    {
        return Product::with('category')->select('id', 'product_title', 'product_quantity', 'image_one', 'category_id', 'product_code', 'status')->orderBy('created_at', 'DESC')->paginate(10);
    }

    public function getCategories()
    {
        return Category::select('id', 'name')->orderBy('name', 'ASC')->get();
    }

    public function getBrands()
    {
        return Brand::select('id', 'name')->orderBy('name', 'ASC')->get();
    }

    public function getSubCategory($category_id)
    {
        return Subcategory::select('id', 'name')->where('category_id', $category_id)->get();
    }

    public function store($request)
    {
        $product = new Product();

        $image_one = $request->image_one;
        $image_two = $request->image_two;
        $image_three = $request->image_three;

        $product->product_title = $request->product_title;
        $product->product_code = $request->product_code;
        $product->product_quantity = $request->product_quantity;
        $product->discount_price = $request->discount_price;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->brand_id = $request->brand_id;
        $product->product_size = $request->product_size;
        $product->product_color = $request->product_color;
        $product->selling_price = $request->selling_price;
        $product->product_details = $request->product_details;
        $product->video_link = $request->video_link;

        if ($request->main_slider == 'on') {
            $product->main_slider = 1;
        }

        if ($request->hot_deal == 'on') {
            $product->hot_deal = 1;
        }

        if ($request->best_rated == 'on') {
            $product->best_rated = 1;
        }

        if ($request->hot_new == 'on') {
            $product->hot_new = 1;
        }

        if ($request->hot_deal == 'on') {
            $product->hot_deal = 1;
        }

        if ($request->trand == 'on') {
            $product->trand = 1;
        }

        if ($image_one) {
            $image_one_name = uniqid('product_', true) . Str::random(10) . '.' . $image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(780, 520)->save('media/products/' . $image_one_name);
            $product->image_one = 'media/products/' . $image_one_name;
        }

        if ($image_two) {
            $image_two_name = uniqid('product_', true) . Str::random(10) . '.' . $image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(780, 520)->save('media/products/' . $image_two_name);
            $product->image_two = 'media/products/' . $image_two_name;
        }

        if ($image_three) {
            $image_three_name = uniqid('product_', true) . Str::random(10) . '.' . $image_three->getClientOriginalExtension();
            Image::make($image_three)->resize(780, 520)->save('media/products/' . $image_three_name);
            $product->image_three = 'media/products/' . $image_three_name;
        }

        $product->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return Product::find($id);
    }

    public function update($request, $category)
    {
        //
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product->image_one) {
            unlink($product->image_one);
        }

        if ($product->image_two) {
            unlink($product->image_two);
        }

        if ($product->image_three) {
            unlink($product->image_three);
        }

        $product->delete();
    }

    public function inactive($id)
    {
        $product = Product::find($id);

        $product->status = 0;
        $product->update();
    }

    public function active($id)
    {
        $product = Product::find($id);

        $product->status = 1;
        $product->update();
    }
}
