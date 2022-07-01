<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

//Route::get('/', function (){
//    return view('interfazprincipal');
//})->name('interfazprincipal');

//Route::get('/home', function () {
 // return view('home');
//})->middleware(['auth'])->name('home');

Route::get('/', [App\Http\Controllers\MainInterfaceController::class, 'index'])->name('interfazprincipal');

//Route::get('/informacionmasc', [App\Http\Controllers\PetInformationController::class, 'index'])->name('informacionmasc');
//Route::get('/{id}', [App\Http\Controllers\PetInformationController::class, 'informacionmasc'])->name('informacionmasc');
Route::get('/adopcion', [App\Http\Controllers\AdoptController::class, 'pet'])->name('adopcion');
Route::get('/adopcion', [App\Http\Controllers\AdoptController::class, 'index'])->name('adopcion');
Route::post('adopcion.store', [App\Http\Controllers\AdoptController::class, 'store'])->name('adopcion.store');
Route::get('getPet/{pet}',[App\Http\Controllers\AdoptController::class,'getPet'])->name('getPet');
Route::get('fundacion', [App\Http\Controllers\ProfileController::class, 'getFundations'])->name('perfil.show');
Route::get('/ayuda', [App\Http\Controllers\AidController::class, 'index'])->name('ayuda');

//fundacionusuarios
Route::get('/fundacion', [App\Http\Controllers\FoundationController::class, 'index'])->name('fundacion');

Route::group(['middleware' => ['auth']], function() {



  //PDF
Route::get('/perfil/pdf', [App\Http\Controllers\UserController::class, 'pdf'])->name('perfil.pdf');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tablerofund', [App\Http\Controllers\TablerofundController::class, 'index'])->name('tablerofund');
//Admin
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');
//userperfil
Route::get('editUser', [\App\Http\Controllers\UserController::class, 'editUser'])->name('perfil.edit');
Route::get('getUser', [\App\Http\Controllers\UserController::class, 'getUser'])->name('perfil.show');
Route::put('updateUser', [\App\Http\Controllers\UserController::class, 'updateUser'])->name('perfil.update');
//useradmin
Route::get('getAdmin', [\App\Http\Controllers\UserController::class, 'getAdmin'])->name('perfiladmin.show');
//MASCOTA
Route::resource('pets', App\Http\Controllers\PetController::class);
//FUNDACIONADMIN
Route::get('getFundation', [App\Http\Controllers\UserController::class, 'getFundation'])->name('foundations.index');

//Route::resource('foundations', App\Http\Controllers\FoundationController::class);
//Route::get('getFundation',[\App\Http\Controllers\UserController::class,'getFundation'] )->name('foundations.index');
//calendario
//Route::resource('calendars', App\Http\Controllers\CalendarController::class);

//calendario
Route::get('/evento', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendars.index');
Route::get('/evento/mostar', [App\Http\Controllers\CalendarController::class, 'show']);
Route::post('/evento/agregar', [App\Http\Controllers\CalendarController::class, 'store']);
Route::post('/evento/editar/{id}', [App\Http\Controllers\CalendarController::class, 'edit']);
Route::post('/evento/borrar/{id}', [App\Http\Controllers\CalendarController::class, 'destroy']);
Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\CalendarController::class, 'update']);
//Preadopción
Route::resource('preadoption', App\Http\Controllers\PreadoptionController::class);
Route::get('/preadoption', [App\Http\Controllers\PreadoptionController::class, 'index'])->name('preadoptions.index');
Route::get('/preadoption/create', [App\Http\Controllers\PreadoptionController::class, 'create'])->name('preadoptions.create');

Route::get('delete/{id}', 'App\Http\Controllers\PreadoptionController@destroy');
Route::get('updateM/{id}', 'App\Http\Controllers\PreadoptionController@updateM');

//Route::resource('posts', App\Http\Controllers\PostController::class);
Route::resource('permissions', App\Http\Controllers\PermissionController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);


});
