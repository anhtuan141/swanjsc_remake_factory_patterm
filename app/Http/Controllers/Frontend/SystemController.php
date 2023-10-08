<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index()
    {
        $cateList = Category::listCategory();
        return view('frontend.system.index', ['cateList' => $cateList]);
    }

    public function about()
    {
        return view('frontend.system.about');
    }

    public function _404()
    {
        return view('frontend.system._404');
    }
}
