<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $cateList = Category::listCategory();
        return view('frontend.category.index', ['cateList' => $cateList]);
    }

    public function catechild()
    {
        $cateList = Category::listCategoryChild();
        return view('frontend.category.category_child', ['cateList' => $cateList]);
    }
}
