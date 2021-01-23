<?php

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

// use Illuminate\Routing\Route
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $items = ['A', 'B', 'C'];

    return view('test', ['items' => $items]);
});

Route::get('/greeting', function () {
    return view('welcome', [
        'name' => 'foo',
        'greeting' => 'hi'
    ]);
});

Route::get('auth/login', function () {
    $credentials = [
        'email' => 'jhone@example.com',
        'password' => 'password'
    ];

    if(! auth()->attempt($credentials)) {
        return '로그인 정보가 정확하지 않습니다.';
    }

    return redirect('protected');
});

Route::get('protected', function () {
    dump(session()->all());
    
    if (! auth()->check()) {
        return '누구세요?';
    }

    return '오서오세요' . auth()->user()->name;
});

Route::get('auth/logout', function () {
    auth()->logout();

    return '또 봐요!';
});