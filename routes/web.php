<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\productcontroller;
use Illuminate\Support\Facades\Route;
// creact to page for website
Route::get('/', [
    PageController::class, 'index'
]);
Route::get('/about', [
    PageController::class, 'about'
]);

// Route
// Route::get('/products', [
//     productcontroller::class,
//     'index'
// ]);

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/arr', function () {
//     return ['arr1', 'arr2', 'arr3'];
// });
// Route::get('/json', function () {
//     return response()->json([
//         'name' => 'Sy',
//         'age' => 12
//     ]);
// });
// Route::get('/home', function () {
//     return view('home');
// });


// với class controller
// đặt tên cho route để dễ truy cập
Route::get('class', [
    productcontroller::class, 'index'
])->name('testNameRoute');
// chuyền id vào route
// Route::get('detail/{id}', [
//     productcontroller::class, 'detail'
// ]);
// giống cái trên nhưng bắt buộc có điều kiện đầu vào là số từ 0->99999 validate
Route::get('detail/{id}', [
    productcontroller::class, 'detail'
])->where(['id', '[0-9]+']);



//redirect chuyển hướng
Route::get('/redirect', function () {
    return redirect('/');
});
