<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interface\HomeInterface;

class HomeController extends Controller
{
    protected $homr;

    public function __construct(HomeInterface $home)
    {
        $this->home = $home;
    }

    public function index()
    {
        $sliders = $this->home->sliders();

        $products = $this->home->products();

        $best_rated = $this->home->bestRated();

        $hot_deal = $this->home->hotDeal();

        $trands = $this->home->trands();

        $posts = $this->home->posts();

        return view('frontend.home', compact('sliders', 'products', 'best_rated', 'hot_deal', 'trands', 'posts'));
    }
}
