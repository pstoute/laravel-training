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
    return view('welcome');
});
// Internal Teams
Route::get('/teams', [\App\Http\Controllers\TeamController::class, 'index']);
Route::get('/teams/create', [\App\Http\Controllers\TeamController::class, 'create']);
Route::post('/teams/create', [\App\Http\Controllers\TeamController::class, 'store']);
// View a team's assigned team members
//Route::get('/team/{$team}/members', [\App\Http\Controllers\TeamController::class, 'showMembers']);

// Internal Team Members
Route::get('/team-members', [\App\Http\Controllers\TeammemberController::class, 'index']);
Route::get('/team-members/create', [\App\Http\Controllers\TeammemberController::class, 'create']);
Route::post('/team-members/create', [\App\Http\Controllers\TeammemberController::class, 'store']);

// External Teams (Companies)
Route::get('/companies', [\App\Http\Controllers\CompanyController::class, 'index']);
Route::get('/companies/create', [\App\Http\Controllers\CompanyController::class, 'create']);
Route::post('/companies/create', [\App\Http\Controllers\CompanyController::class, 'store']);

