<?php

use App\Models\Post;
use App\Http\Controllers\PostCont;
use App\Http\Controllers\UserCont;
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
    $posts = [];
    if (auth()->check()){
        $posts = auth()->user()->usersPost()->latest()->get();
    }
    return view('landing', ['posts' => $posts]);
});
Route::post('/register', [UserCont::class, 'register']);
Route::post('/logout', [UserCont::class, 'logout']);
Route::post('/login', [UserCont::class, 'login']);

Route::post('/spost', [PostCont::class, 'sposts']);
Route::get('/edit/post/{post}', [PostCont::class, 'edit']);