<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('test-db', function() {
    /*App\User::create([
        'email' => uniqid().'@examle.com',
        'name' => 'User 01',
        'password' => bcrypt(12345678)
    ]);*/

    return response()->json(App\User::all());
});

Route::get('test-cache', function() {
    Cache::put('testKey01', 'this is value of testKeyO1', 10);

    return Cache::get('testKey01');
});