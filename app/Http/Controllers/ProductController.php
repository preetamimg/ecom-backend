<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function addProduct(Request $req) {
        $Product = new Product;
        $Product->name=$req->input('name');
        $Product->price=$req->input('price');
        $Product->description=$req->input('description');
        $Product->file_path=$req->file('file')->store('products');
        $Product->save();
        return $Product;
    }
}
