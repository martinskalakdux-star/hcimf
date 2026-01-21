<?php

use Illuminate\Support\Facades\Route;
use App\Models\{News, Artist, Program};

Route::get('/', function () {
    $programs = Program::query()->limit(3)->get();

    return view('homepage', ['programs' => $programs]);
})->name('home');

Route::get('/aktuality', function () {
    return view('articles', ['articles' => News::all()]);
})->name('articles');

Route::get('/aktuality/{news}', function (News $news) {
    return view('article', ['article' => $news]);
})->name('article');

Route::get('/umelci', function () {
    return view('artists', ['artists' => Artist::all()]);
})->name('artists');

Route::get('/umelci/{artist}', function (Artist $artist) {
    return view('artist', ['artist' => $artist]);
})->name('artist');

Route::get('/program', function () {
    return view('programs', ['programs' => Program::all()]);
})->name('programs');

Route::get('/program/{program}', function (Program $program) {
    return view('program', ['program' => $program]);
})->name('program');

Route::get('/o-festivalu', function () {
    return view('about');
})->name('about');
