<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoCompanyController extends Controller
{
    public function getCompanies(Request $req) {
        $authUser = Auth::user();

        return response()->json([
            "user" => $authUser,
            "message" => "Siamo ritornati porca t***a!",
        ], 200);
    }
}
