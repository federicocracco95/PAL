<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoCompanyController;
use App\Http\Controllers\InfoConsultantController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DiseaseFormController;
use App\Http\Controllers\UserController;

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

// auth api
Route::post("/login",[AuthController::class,"login"]);
Route::post('/resetpassword',[AuthController::class,"firstLoginChange"]);



// authentication required api
Route::group(["middleware"=> "auth.api"],function(){

    Route::post("/logout",[AuthController::class, "logout"]);
    Route::post("/users", [UserController::class, "create"]);
    Route::get("/infocompany", [InfoCompanyController::class, "list"]);
    Route::get("/infoconsultant", [InfoConsultantController::class, "list"]);
    Route::get("/employee", [EmployeeController::class, "list"]);
    Route::get("/diseaseform", [DiseaseFormController::class, "list"]);
    Route::post("/diseaseform", [DiseaseFormController::class, "store"]);
});
