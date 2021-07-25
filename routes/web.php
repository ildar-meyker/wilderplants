<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('catalog');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/ajax/products', function () {

    $products = [
        'plants' => [
            [
                "id" => 1,
                "title" => "Aglaonema swiss chesse Plant Costa",
                "price" => "30",
                "image" => "/img/temp/plant-card/2.webp"
            ], [
                "id" => 2,
                "title" => "Lorem ipsum dolor sit amet",
                "price" => "30.50",
                "image" => "/img/temp/plant-card/2.webp"
            ], [
                "id" => 3,
                "title" => "Neque porro quisquam est qui ",
                "price" => "10.15",
                "image" => "/img/temp/plant-card/2.webp"
            ], [
                "id" => 4,
                "title" => "Lorem ipsum dolor sit amet ",
                "price" => "0",
                "image" => "/img/temp/plant-card/2.webp"
            ]
        ],
        'pots' => [
            [
                "id" => 1,
                "title" => "Aglaonema swiss chesse Plant Costa",
                "price" => "10",
                "image" => "https://images-na.ssl-images-amazon.com/images/I/41-G77tL9yL._SS300_.jpg"
            ], [
                "id" => 2,
                "title" => "Lorem ipsum dolor sit amet",
                "price" => "15",
                "image" => "https://images-na.ssl-images-amazon.com/images/I/51TbGySGyjL._SS300_.jpg"
            ], [
                "id" => 3,
                "title" => "Neque porro quisquam est qui ",
                "price" => "40",
                "image" => "https://images-na.ssl-images-amazon.com/images/I/51oGgJF0zyL._SS300_.jpg"
            ]

        ],
        'accessories' => [
            [
                "id" => 1,
                "title" => "Aglaonema swiss chesse Plant Costa",
                "price" => "10",
                "image" => "https://images-na.ssl-images-amazon.com/images/I/51MFm26LhgL._SS300_.jpg"
            ],
            [
                "id" => 2,
                "title" => "Lorem ipsum dolor sit amet",
                "price" => "15",
                "image" => "https://images-na.ssl-images-amazon.com/images/I/3196iGTrrUL._SS300_.jpg"
            ],
            [
                "id" => 3,
                "title" => "Neque porro quisquam est qui ",
                "price" => "40",
                "image" => "https://images-na.ssl-images-amazon.com/images/I/31xPKFAt4rL._SS300_.jpg"
            ]
        ]
    ];

    $inputType = request()->input('type');

    if (array_key_exists($inputType, $products)) {
        return Arr::shuffle($products[$inputType]);
    }

    return [];
});

Route::get('/ajax/popup-example', function () {
    return view('ajax.popup-example');
});

Route::get('/ajax/quick-view', function () {
    return view('ajax.quick-view');
});
