<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Interface\NewslaterIntterface;
use Illuminate\Http\Request;

class NewslaterController extends Controller
{
    protected $newslatter;

    public function __construct(NewslaterIntterface $newslatter)
    {
        $this->middleware('auth:admin');
        $this->newslatter = $newslatter;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newslatters = $this->newslatter->index();
        return view('backend.newslatters.index', compact('newslatters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
