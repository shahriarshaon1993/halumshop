<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Interface\RepoInterface;
use App\Models\Category;


class CategoryController extends Controller
{
    protected $category;

    public function __construct(RepoInterface $category)
    {
        $this->middleware('auth:admin');
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->index();
        return view('backend.category.index', compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $this->category->store($request);

        $notification = array(
            'message' => 'Category Added Successfully',
            'alert-type' => 'success',
        );

        return Redirect()->back()->with($notification);
    }

    public function edit($slug)
    {
        $category = $this->category->edit($slug);

        return view('backend.category.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $this->category->update($request, $category);

        $notification = array(
            'message' => 'Category Updated!',
            'alert-type' => 'success'
        );

        return redirect()->route('categories.index')->with($notification);;
    }

    public function destroy($id)
    {
        $this->category->destroy($id);

        $notification = array(
            'message' => 'Category Deleted!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
