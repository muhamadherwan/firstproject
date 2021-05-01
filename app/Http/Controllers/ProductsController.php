<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // index
    public function index(){
        $title = "Welcome Code Ninja";
        $desc = "move fast break things";
        
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        // compact method
        // return view('products.index', 
        // compact('title', 'desc'));

        // return directly in view
        // return view('products.index', [
        //     'data' => $data
        // ]);

        // with method
        return view('products.index')->with('data', $data);

    }

    // about
    public function about(){
        return view('products.about');
    }
}
