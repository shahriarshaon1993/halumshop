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

        $bestRated = $this->home->bestRated();

        $hotDeal = $this->home->hotDeal();

        $trands = $this->home->trands();

        $posts = $this->home->posts();

        $parentCategories = $this->home->parentCategories();

        $brands = $this->home->brands();

        return view('frontend.home', compact('sliders', 'products', 'bestRated', 'hotDeal', 'trands', 'posts', 'parentCategories', 'brands'));
    }
}
