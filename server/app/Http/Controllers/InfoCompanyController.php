<?php

namespace App\Http\Controllers;

use App\Models\InfoCompany;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoCompanyController extends Controller
{
    public function getCompanies(Request $req) {
        try {
            $authUser = Auth::user();

            $query = InfoCompany::query();

            if ($authUser->is_company) {
                // Company role filter
            }

            if ($authUser->is_pa_user) {
                // PA user role filter
            }

            if ($authUser->is_consultant) {
                // Consultant role filter
            }

            $data = $query->get();

            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json("error", 500);
        }
    }
}
