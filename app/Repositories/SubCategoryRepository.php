<?php

namespace App\Repositories;

use App\Interface\SubCategoryInterface;
use App\Models\Category;
use App\Models\Subcategory;

class SubCategoryRepository implements SubCategoryInterface
{
    public function index()
    {
        return Subcategory::with('category')
            ->select('id', 'name', 'category_id', 'slug')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
    }

    public function categoryAll()
    {
        return Category::select('name', 'id',)->get();
    }

    public function store($request)
    {
        $subcategory = new Subcategory();

        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
    }

    public function edit($id)
    {
        return Subcategory::find($id);
    }

    public function update($request, $subcategory)
    {
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->update();
    }

    public function destroy($id)
    {
        $category = Subcategory::find($id);
        $category->delete();
    }
}
