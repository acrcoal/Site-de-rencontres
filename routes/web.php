<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\GroupeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembreController;

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

//save
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');


Route::group(['middleware'=>['AuthCheck']], function(){

    //login route
Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
Route::get('membresList', [MainController::class, 'membresList'])->name('membres.membrelist');
Route::get('monprofil', [MainController::class, 'profil'])->name('membres.profil');


// Debut modifier

Route::get('edit/{admin}', [MainController::class, 'edit'])->name('auth.edit');

Route::put('{admin}', [MainController::class, 'update'])->name('auth.update');
// Fin modifier

// Debut rechercher une membre

Route::get('recherchermembre', [MainController::class, 'rechercher'])->name('membres.recherchermembre');

//Fin rechercher une membre

Route::get('membres', [MainController::class, 'showAll'])->name('membres.showAll');

Route::get('match', [MainController::class, 'match'])->name('membres.match');
Route::get('bloquer', [MainController::class, 'bloquer'])->name('membres.bloquer');
Route::get('chat', [MainController::class, 'chat'])->name('membres.chat');

Route::get('listEvenement', [MainController::class, 'listEvenement'])->name('evenements.listEvenement');
Route::get('inscriptionEvenement', [MainController::class, 'inscriptionEvenement'])->name('evenements.inscriptionEvenement');
Route::get('creerEvenement', [MainController::class, 'createEvenement'])->name('evenements.createEvenement');
//GroupeController

Route::get('creerGroupe', [MainController::class, 'createGroupe'])->name('groupes.createGroupe');
Route::get('mesGroupes', [MainController::class, 'showGroupes'])->name('groupes.showGroupes');

//BlogController

Route::get('creerBlog', [MainController::class, 'createBlog'])->name('blogs.createBlog');
Route::get('leBlog', [MainController::class, 'showAllBlog'])->name('blogs.showAllBlog');
});

    //MembreController

/*Route::get('monprofil', [MembreController::class, 'profil']); 

Route::get('modifier', [MembreController::class, 'modifier']);

Route::get('membres', [MembreController::class, 'showAll']);

Route::get('recherchermembre', [MembreController::class, 'rechercher']);

Route::get('match', [MembreController::class, 'match']);

Route::get('bloquer', [MembreController::class, 'bloquer']);

Route::get('chat', [MembreController::class, 'chat']);

Route::get('membresList', [MembreController::class, 'membresList']);*/





//HomeController

Route::get('home', [HomeController::class, 'index']);

Route::get('connectez', [HomeController::class, 'connecter'])->name('homes.connecter');

Route::get('creercompte', [HomeController::class, 'create'])->name('homes.create');

Route::get('noussommes', [HomeController::class, 'noussommes'])->name('homes.noussommes');

Route::get('conditions', [HomeController::class, 'conditions'])->name('homes.conditions');

Route::get('regles', [HomeController::class, 'regle'])->name('homes.regle');

Route::get('contacte', [HomeController::class, 'contactenous'])->name('homes.contactenous');
    









/*
//EvenementController

Route::get('listEvenement', [EvenementController::class, 'listEvenement']);

Route::get('inscriptionEvenement', [EvenementController::class, 'inscriptionEvenement']);

Route::get('creerEvenement', [EvenementController::class, 'createEvenement']);

//GroupeController

Route::get('creerGroupe', [GroupeController::class, 'create']);

Route::get('mesGroupes', [GroupeController::class, 'showGroupes']);

//BlogController

Route::get('creerBlog', [BlogController::class, 'create']);

Route::get('leBlog', [BlogController::class, 'showAllBlog']);

*/