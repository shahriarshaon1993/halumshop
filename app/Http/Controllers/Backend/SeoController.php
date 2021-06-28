<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Interface\SeoInterface;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    protected $seosetting;

    public function __construct(SeoInterface $seosetting)
    {
        $this->middleware('auth:admin');
        $this->seosetting = $seosetting;
    }

    public function index()
    {
        $seo = $this->seosetting->index();
        return view('backend.seo.index', compact('seo'));
    }

    public function update(Request $request, $id)
    {
        $this->seosetting->update($request, $id);

        $notification = array(
            'message' => 'SEO setting updated successfully',
            'alert-type' => 'success',
        );

        return Redirect()->back()->with($notification);
    }
}
