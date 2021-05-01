<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // index
    public function index(){

        print_r(route('products'));
        
        return view('products.index');

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
