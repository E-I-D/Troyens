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
    return view('index');
})->name('home');

Route::get('/historique', function () {
    return view('visitor.historique');
})->name('histoire');

Route::get('/bureau', function () {
    return view('visitor.organigramme');
})->name('bureau');

Route::get('/mot-du-president', function () {
    return view('visitor.message');
})->name('message');

Route::get('/nos-objectifs', function () {
    return view('visitor.objectif');
})->name('objectif');

Route::get('/journee-excellence', function () {
    return view('visitor.jde');
})->name('jde');

Route::get('/journee-du-troyen', function () {
    return view('visitor.jdt');
})->name('jdt');

Route::get('/ceremonie-hommage', function () {
    return view('visitor.ceremonie');
})->name('hommage');

Route::get('/etablissement-troyen', function () {
    return view('visitor.troyen');
})->name('troyen');

Route::get('/nos-actions', function () {
    return view('visitor.actions');
})->name('actions');

Route::get('/distinctions-et-laureats', function () {
    return view('visitor.distinction');
})->name('distinction');

Route::get('/espace-jeu-et-concours', function () {
    return view('visitor.concours');
})->name('concours');

Route::get('/nos-donateur', function () {
    return view('visitor.donateur');
})->name('donateur');

Route::get('/nos-photos', function () {
    return view('visitor.photos');
})->name('photos');

Route::get('/nos-videos', function () {
    return view('visitor.videos');
})->name('videos');

Route::get('/nous-contacter', function () {
    return view('visitor.contact');
})->name('contact');

Route::get('/devenir-membre-ou-beneficiare', function () {
    return view('visitor.register');
})->name('register');
