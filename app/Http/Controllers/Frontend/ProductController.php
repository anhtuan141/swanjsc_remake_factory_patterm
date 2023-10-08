<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($alias)
    {
        $cate = Category::listByAlias($alias);
        if (!$cate) {
            return view('frontend.system._404');
        }

        $list = Product::listForCategory($cate->id);
        return view(
            'frontend.product.index',
            [
                'list' => $list,
                'cate' => $cate
            ]
        );
    }

    public function detail($alias)
    {
        $detail = Product::detailByAlias($alias);
        if (!$detail) {
            return view('frontend.system._404');
        }

        return view('frontend.product.detail', ['detail' => $detail]);
    }
}
