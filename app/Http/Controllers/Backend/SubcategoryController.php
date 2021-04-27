<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Interface\SubCategoryInterface;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    protected $subcategory;

    public function __construct(SubCategoryInterface $subcategory)
    {
        $this->middleware('auth:admin');
        $this->subcategory = $subcategory;
    }

    public function index()
    {
        $subcategories = $this->subcategory->index();
        $categories = $this->subcategory->categoryAll();

        return view('backend.subcategory.index', compact('subcategories', 'categories'));
    }

    public function store(StoreSubcategoryRequest $request)
    {
        $this->subcategory->store($request);

        $notification = array(
            'message' => 'Sub Category Added Successfully',
            'alert-type' => 'success',
        );

        return Redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $subcategory = $this->subcategory->edit($id);
        $categories = $this->subcategory->categoryAll();

        return view('backend.subcategory.edit', compact('subcategory', 'categories'));
    }

    public function update(UpdateSubcategoryRequest $request, Subcategory $subcategory)
    {
        $this->subcategory->update($request, $subcategory);

        $notification = array(
            'message' => 'Sub Category Updated!',
            'alert-type' => 'success'
        );

        return redirect()->route('subcategories.index')->with($notification);;
    }

    public function destroy($id)
    {
        $this->subcategory->destroy($id);

        $notification = array(
            'message' => 'Sub Category Deleted!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
