<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

//!Rotas estáticas primeiro
//!Rotas dinâmicas depois
//*Pois a primeira rota que se enquadra na regra, é a enviada.
Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/sobre-nos', [HomeController::class, 'AboutUs']);
Route::get('/menu/view/{id}', [HomeController::class, 'ViewMenu']);

Route::get('/menu/new', [MenuController::class, 'create'])->name('menus.create'); //Formulário
Route::post('/menu/create', [MenuController::class, 'store'])->name('menus.store'); //Igual a de API
Route::get('/menu/delete/{id}', [MenuController::class, 'destroy'])->name('menus.destroy'); //Igual a de API
Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menus.edit'); // Formulário
Route::post('/menu/updade/{id}', [MenuController::class, 'update'])->name('menus.update'); //Igual de API

/*
	* Montar um formulário para cadastrar menus
	* Listar Menus
	* Acessar Menus
	* Cadastrar Menus
	* Editar Menus
	TODO: Deletar Menus
*/