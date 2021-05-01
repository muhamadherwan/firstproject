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

        // with method
        return view('products.index')->with('data', $data);

    }

    // show
    // public function show($id){
    //     return view('products.show')->with('id', $id);
    // }

    public function show($name){
        
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'Product' . $name . 'does not exist'
        ]);
    }

    // about
    public function about(){
        return view('products.about');
    }
}
