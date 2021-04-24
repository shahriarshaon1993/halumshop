<?php

namespace App\Interface;

use Illuminate\Http\Request;

interface RepoInterface
{
    public function index();
    public function store(Request $request);
    public function edit($id);
    public function update(Request $request, $id);
    public function destroy($id);
}
