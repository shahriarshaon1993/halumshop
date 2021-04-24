<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\RepoInterface;
use Illuminate\Http\Request;

class CategoryRepository implements RepoInterface
{
    public function index()
    {
        return Category::select('id', 'name', 'banner')->simplePaginate(10);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
        //
    }
}
