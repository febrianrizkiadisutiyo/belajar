<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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

// Route::get('/data', function () {
//     return view('data', ['name' => 'ajikun']);
// });
Route::get('/profil',[ProfilController::class, 'index']);
Route::get('/createprofil',[ProfilController::class, 'create']);
Route::post('/storeprofil',[ProfilController::class, 'store']);
