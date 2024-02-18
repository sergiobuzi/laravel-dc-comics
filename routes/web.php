<?php

use Illuminate\Support\Facades\Route;


// collego il controller
use App\Http\Controllers\MainController;


// rotta per l'index
Route::get('/',[MainController::class, 'index']) -> name('users.index');



// creo la rotta per la create e do il nome 
Route::get('/users/create', [MainController::class, 'create']) ->name('users.create');


// Le rotte con le variabili vanno sempre sotto tutte le altre rotte

// creo la rotta per la show e dopo aggiungo il proprio nome per poterla richiamare nella view e utilizzarlo per il front end
Route::get('/users/{id}', [MainController :: class, 'show']) ->name('users.show');