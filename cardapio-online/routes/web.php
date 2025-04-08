<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\MenuController;

//!Rotas estáticas primeiro
//!Rotas dinâmicas depois
//*Pois a primeira rota que se enquadra na regra, é a enviada.
Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/sobre-nos', [HomeController::class, 'AboutUs']);

Route::group(['prefix' => '/meals'], function () {
	Route::get('/new/{id}', [MealController::class, 'create'])->name('meals.create');
	Route::post('/create', [MealController::class, 'store'])->name('meals.store');
	Route::get('/edit/{id}', [MealController::class, 'edit'])->name('meals.edit');
	Route::post('/update/{id}', [MealController::class, 'update'])->name('meals.update');
	Route::get('/delete/{id}', [MealController::class, 'destroy'])->name('meals.destroy');
});

Route::group(['prefix' => '/menu'], function () {
	Route::get('/view/{id}', [HomeController::class, 'ViewMenu'])->name('menus.view');
	Route::get('/new', [MenuController::class, 'create'])->name('menus.create'); //Formulário
	Route::post('/create', [MenuController::class, 'store'])->name('menus.store'); //Igual a de API
	Route::get('/delete/{id}', [MenuController::class, 'destroy'])->name('menus.destroy'); //Igual a de API
	Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('menus.edit'); // Formulário
	Route::post('/update/{id}', [MenuController::class, 'update'])->name('menus.update'); //Igual de API
});

/*
	* Montar um formulário para cadastrar menus
	* Listar Menus
	* Acessar Menus
	* Cadastrar Menus
	* Editar Menus
	TODO: Deletar Menus
*/