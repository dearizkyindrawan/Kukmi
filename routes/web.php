<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/Home/index'
    ];
    return view('home.layouts.wrapper', $data);
});
Route::get('/About', function(){
    $data = [
        'content' => 'home/About/index'
    ];
    return view('home.layouts.wrapper', $data);
});
Route::get('/Albums', function(){
    $data = [
        'content' => 'home/Albums/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/Contact', function(){
    $data = [
        'content' => 'home/Contact/index'
    ];
    return view('home.layouts.wrapper', $data);
});
Route::get('/Services', function(){
    $data = [
        'content' => 'home/Services/index'
    ];
    return view('home.layouts.wrapper', $data);
});
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;

Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::get('/albums/create', [AlbumController::class, 'create'])->name('albums.create');
Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');

Route::get('/albums/{album}/photos/create', [PhotoController::class, 'create'])->name('photos.create');
Route::post('/albums/{album}/photos', [PhotoController::class, 'store'])->name('photos.store');

