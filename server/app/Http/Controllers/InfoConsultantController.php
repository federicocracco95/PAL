<?php

namespace App\Http\Controllers;

use App\Models\InfoConsultant;
use App\Models\InfoCompany;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoConsultantController extends Controller
{
    public function list(Request $req) {
        try {
            $data = InfoConsultant::get();
            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Error in retriving all InfoConsultants",
                'status_code' => 500
            ], 500);
        }
    }
}
