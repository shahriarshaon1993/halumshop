<?php

namespace App\Interface;

use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

interface RepoInterface
{
    public function index();
    public function store($request);
    public function edit($slug);
    public function update($request, $category);
    public function destroy($id);
}
