<?php

namespace App\Repositories;

use App\Models\Category;
use App\Interface\RepoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Image;

class CategoryRepository implements RepoInterface
{
    public function index()
    {
        return Category::select('id', 'name', 'banner')->orderBy('id', 'DESC')->simplePaginate(10);
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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        unlink($category->banner);
        $category->delete();
    }
}
