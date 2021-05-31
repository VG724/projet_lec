<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::post('/day', [ApiController::class, 'addDay']);
Route::post('/days/{lec_day_id}/matches', [ApiController::class, 'addMatchDay']);
Route::post('matches/{lec_match_id}',[ApiController::class, 'updateMatch']);
Route::post('team', [ApiController::class, 'addTeam']);
Route::post('/bets/{user_id}', [ApiController::class,'addBetUser']);


