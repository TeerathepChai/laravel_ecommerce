<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = \App\Models\Product::all();
        return view('products.index', compact('products'));
    }
    public function show($id)
    {
        // ค้นหาสินค้าตาม ID ถ้าไม่เจอจะส่งไปหน้า 404
        $product = Product::findOrFail($id);

        // ส่งข้อมูลไปที่หน้า view ชื่อ show.blade.php
        return view('products.show', compact('product'));
    }
}
