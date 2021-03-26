<?php

namespace App\Http\Controllers;

use App\Models\InfoCompany;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoCompanyController extends Controller
{
    public function list(Request $req) {
        try {
            $data = InfoCompany::get();
            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Error in retriving all InfoCompanys",
                'status_code' => 500
            ], 500);
        }
    }
}
