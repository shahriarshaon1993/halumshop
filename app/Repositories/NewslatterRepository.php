<?php

namespace App\Repositories;

use App\Interface\NewslaterIntterface;
use App\Models\Newslater;

class NewslatterRepository implements NewslaterIntterface
{
    public function index()
    {
        return Newslater::select('id', 'email')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
    }
    public function store($request)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
