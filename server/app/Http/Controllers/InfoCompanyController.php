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
            $authUser = Auth::user();
            $infoUser = User::get()->where('username',$authUser["username"]);

            $query = InfoCompany::query();

            if ($authUser['role'] == 'company') {
                $query->where('id',$infoUser[$authUser['id']-1]["info_company_id"])->first();
            }
            if ($authUser['role'] === 'consultant') {
                $query->where('id', $infoUser[$authUser['id']-1]["info_consultant_id"]);
            }
            if ($authUser['role'] == 'pa_user') {
            }

            $data = $query->get();

            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Error in retriving data through InfoCompany",
                'status_code' => 500
            ], 500);
        }
    }
}
