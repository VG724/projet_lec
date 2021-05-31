<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/days', [ApiController::class, 'getDays']);
Route::get('/days/{lec_day_id}/matches', [ApiController::class, 'getMatchesDay']);
Route::get('/matches' , [ApiController::class, 'getMatches']);
Route::get('teams', [ApiController::class, 'getTeams']);
Route::get('/bets', [ApiController::class, 'getBets']);
Route::get('/bets/{user_id}',[ApiController::class,'getBetsUser']);

Route::post('/days', [ApiController::class, 'addDays']);
Route::post('/days/{lec_day_id}/matches', [ApiController::class, 'addMatchesDay']);
Route::post('teams', [ApiController::class, 'addTeams']);
Route::post('/bets/{user_id}', [ApiController::class,'addBetsUser']);


