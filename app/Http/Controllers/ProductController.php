<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('product',['product'=>$product]);
    }
}
