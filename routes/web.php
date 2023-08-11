<?php

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

Route::get('/', function () {
    return view('welcome');
});



use Illuminate\Support\Facades\DB;

Route::get('/oracle', function () {
    try {
        DB::connection('oracle')->getPdo();
        return 'Conexión Oracle exitosa';
    } catch (\Exception $e) {
        return 'Error al conectar con Oracle: ' . $e->getMessage();
    }
});


