<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk',function () {
return
view ('products.index');
});

Route::get('/produk/{id}', function ($id) {

    $products = [

        1 => [
            'id' => 1,
            'name' => 'Queen Basic',
            'description' => 'Baju basic yang nyaman untuk dipakai sehari-hari.',
            'icon' => '👕'
        ],

        2 => [
            'id' => 2,
            'name' => 'Queen Casual',
            'description' => 'Model casual untuk aktivitas harian.',
            'icon' => '👚'
        ],

        3 => [
            'id' => 3,
            'name' => 'Queen Simple',
            'description' => 'Desain simpel yang mudah dipadukan.',
            'icon' => '👕'
        ],

        4 => [
            'id' => 4,
            'name' => 'Queen Daily',
            'description' => 'Pilihan baju untuk kegiatan sehari-hari.',
            'icon' => '👚'
        ],

        5 => [
            'id' => 5,
            'name' => 'Queen Street',
            'description' => 'Gaya santai untuk aktivitas outdoor.',
            'icon' => '👕'
        ],

        6 => [
            'id' => 6,
            'name' => 'Queen Style',
            'description' => 'Baju simpel dan stylish.',
            'icon' => '👚'
        ]

    ];

    if (!isset($products[$id])) {
        abort(404);
    }

    return view('products.show', [
        'product' => $products[$id]
    ]);

});

Route::get('/keranjang', function () {

    $cart = session('cart', []);

    return view('cart', [
        'cart' => $cart
    ]);

});


Route::post('/keranjang/tambah/{id}', function ($id) {

    $products = [

        1 => [
            'id' => 1,
            'name' => 'Queen Basic',
            'price' => 25000,
            'icon' => '👕'
        ],

        2 => [
            'id' => 2,
            'name' => 'Queen Casual',
            'price' => 25000,
            'icon' => '👚'
        ],

        3 => [
            'id' => 3,
            'name' => 'Queen Simple',
            'price' => 25000,
            'icon' => '👕'
        ],

        4 => [
            'id' => 4,
            'name' => 'Queen Daily',
            'price' => 25000,
            'icon' => '👚'
        ],

        5 => [
            'id' => 5,
            'name' => 'Queen Street',
            'price' => 25000,
            'icon' => '👕'
        ],

        6 => [
            'id' => 6,
            'name' => 'Queen Style',
            'price' => 25000,
            'icon' => '👚'
        ]

    ];


    if (!isset($products[$id])) {
        abort(404);
    }


    $cart = session('cart', []);

    if (isset($cart[$id])) {

        $cart[$id]['quantity']++;

    } else {

        $cart[$id] = $products[$id];

        $cart[$id]['quantity'] = 1;

    }


    session([
        'cart' => $cart
    ]);


    return redirect('/keranjang');

});
