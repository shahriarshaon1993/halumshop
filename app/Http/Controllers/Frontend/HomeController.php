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
        $hotDeals = $this->home->hotDeal();
        $bestSellers = $this->home->bestSeller();
        $trand = $this->home->trand();
        $posts = $this->home->posts();
        $newArrival = $this->home->newArrival();
        $brands = $this->home->brands();
        $parentCategories = $this->home->parentCategories();
        $specialOffer = $this->home->specialOffer();

        return view('frontend.home', compact('sliders', 'products', 'hotDeals', 'bestSellers', 'trand', 'posts', 'newArrival', 'brands', 'parentCategories', 'specialOffer'));
    }
}
