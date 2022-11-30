<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsControllers extends Controller
{
    public function index()
    {
        $title = "Le Khac Thien demo laravel";
        $name = "Thien";
        // passing data from controller to view, using compact.
        // 'compact' can send multiple parameters
        // return view('products.index', compact('name', 'title'));
        // 'with' can send only 1 parameter
        // return view('products.index')->with('name', $name);

        $myphone = [
            'name' => 'IPhone 14',
            'year' => 2022
        ];

        return view('products.index', compact('myphone', 'name', 'title'));
    }

    public function detail($id)
    {
        return view('products.detail', compact('id'));
    }

    public function search($productName)
    {
        $phones = [
            'iphone14' =>  'iphone14',
            'samsung' => 'samsung'
        ];

        return view('products.search', [
            'product' => $phones[$productName] ?? 'Product Not Found'
        ]);
    }
}
