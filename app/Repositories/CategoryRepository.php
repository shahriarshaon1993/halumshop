<?php

namespace App\Repositories;

use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Interface\RepoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Image;

class CategoryRepository implements RepoInterface
{
    public function index()
    {
        return Category::select('id', 'name', 'banner', 'slug')->orderBy('id', 'DESC')->paginate(10);
    }

    public function store($request)
    {
        $category = new Category();

        $banner = $request->banner;
        $category->name = $request->name;

        if ($banner->isValid()) {
            $file_name = uniqid('category_banner_', true) . Str::random(10) . '.' . $banner->getClientOriginalExtension();
            Image::make($banner)->resize(780, 520)->save('media/categories/' . $file_name);
            $category->banner = 'media/categories/' . $file_name;
            $category->save();
        }
    }

    public function edit($id)
    {
        return Category::find($id);
    }

    public function update($request, $category)
    {
        $old_banner = $category->banner;
        $new_banner = $request->banner;

        $category->name = $request->name;

        if ($request->banner) {
            unlink($old_banner);
            $file_name = uniqid('category_banner_', true) . Str::random(10) . '.' . $new_banner->getClientOriginalExtension();
            Image::make($new_banner)->resize(780, 520)->save('media/categories/' . $file_name);
            $category->banner = 'media/categories/' . $file_name;
        }

        $category->update();
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        unlink($category->banner);
        $category->delete();
    }
}
