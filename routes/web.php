<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});*/

/*** mis rutas */

# ruta web que apunta a la raiz "/" al método index de HomeController

Route::get("/",[HomeController::class,'index'])->name("Home.index");

# ruta que apunta la url /user/{name} al método show del controlador UserController

Route::get("/user/{name?}",[UserController::class,'show'])->name("user.show");

# PARA MOSTRAR LA VISTA information.blade.php


Route::get("/info",function(){
 return view("information.information");
});


# ruta para mostrar el formulario registro de usuarios

Route::get("/register",function(){
    return view("usuario.register");
});

# ruta para mostrar formulario login

Route::get("/login",function(){
    return view("auth.login");
});

# mostrar listado de usuarios (p.9)
Route::get("/usuario/list",function(){
    return view("usuario.list");
});

# mostrar los curso


Route::get("/courses",[CursoController::class,'index'])->name("courses.index");