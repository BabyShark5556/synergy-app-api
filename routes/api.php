<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;
use App\Http\Controllers\Api\AuthController;
//use App\Http\Controllers\ProductController;


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

Route::middleware('auth:sanctum')->get('/user',    function (Request $request) {
    return $request->user();
});


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/register', [AuthController::class,'register']);
    Route::post('/login', [AuthController::class,'login']);
    Route::post('/logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);


    Route::apiResource('/products', Api\ProductController::class);
    Route::apiResource('/projects', Api\ProjectController::class);
    Route::apiResource('/comepany/project', Api\IncomeController::class);
    Route::get('/comepany/income', [Api\IncomeController::class,'income']);
    Route::get('/comepany/outcome', [Api\IncomeController::class,'outcome']);
    Route::apiResource('/project/reports', Api\ProjectReportController::class);
   
});

