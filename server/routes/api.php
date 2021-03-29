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

// authentication required api
Route::group(["middleware"=> "auth.api"],function(){

    Route::post("/logout",[AuthController::class, "logout"]);

    Route::post('/resetpassword',[AuthController::class,"firstLoginChange"]);

    //Route::post("/users", [UserController::class, "create"]);

    Route::get("/infocompany", [InfoCompanyController::class, "list"]);

    Route::get("/infoconsultant", [InfoConsultantController::class, "list"]);

    Route::get("/employee", [EmployeeController::class, "list"]);

    Route::get("/diseaseform/check", [DiseaseFormController::class, "listcheck"]);
    Route::get("/diseaseform/approve", [DiseaseFormController::class, "listapprove"]);
    Route::get("/diseaseform/notapproved", [DiseaseFormController::class, "listnotapproved"]);
    Route::put("/diseaseform/approve/{id}", [DiseaseFormController::class, "approve"]);
    Route::put("/diseaseform/notapprove/{id}", [DiseaseFormController::class, "notapprove"]);
    Route::delete("/diseaseform/delete/{id}", [DiseaseFormController::class, "delete"]);

    Route::get("/diseaseform/{id}", [DiseaseFormController::class, "getForm"]);
    Route::post("/diseaseform", [DiseaseFormController::class, "store"]);
    //Route::put("/diseaseform/{id}", [DiseaseFormController::class, "edit"]);
    
});
