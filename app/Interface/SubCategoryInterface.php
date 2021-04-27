<?php

namespace App\Interface;

interface SubCategoryInterface
{
    public function index();
    public function categoryAll();
    public function store($request);
    public function edit($id);
    public function update($request, $subcategory);
    public function destroy($id);
}
