<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ExitMgtController extends Controller
{
    public function index()
    {
        //$products = Product::query()->orderBy('updated_at', 'asc')->paginate(8);
        return view('exit.index');
//        return view('product.index', [
//            'products' => $products
//        ]);
    }
}
