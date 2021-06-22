<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interface\FrontPostInterface;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontPostController extends Controller
{
    protected $posts;

    public function __construct(FrontPostInterface $posts)
    {
        $this->posts = $posts;
    }

    public function postIndex()
    {
        $posts = $this->posts->postIndex();
        return view('frontend.post', compact('posts'));
    }

    public function english()
    {
        $this->posts->english();
        return redirect()->back();
    }

    public function bangla()
    {
        $this->posts->bangla();
        return redirect()->back();
    }

    public function singlePost($slug)
    {
        $post = $this->posts->singlePost($slug);
        return view('frontend.post-single', compact('post'));
    }
}
