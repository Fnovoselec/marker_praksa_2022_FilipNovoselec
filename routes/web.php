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
    return view('welcome');
});

//route kreirana da prikaze sve blog postove
Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']);

//route kreirana za prikaz jednog posta
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);
/* {blogPOst} = wildcard, znaci da ce {blogPost}biti zamjenjen sa  napisanim poslije blog /  vrijednost se sprema u varijablu nazvanu $blogPost */


Route::get('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'create']); // prikaz forme za kreiranje posta


Route::post('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'store']); //sprema kreirani post u DB


Route ::get('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit']); // prikaz forme za edit posta


Route::put('/blog/{blogPost}/edit',[\App\Http\Controllers\BlogPostController::class, 'update']); //sprema editiran post u DB


Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']); //brise post iz DB


