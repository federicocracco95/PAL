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
            
            $authUser = Auth::user();
            $infoUser = User::where('username', $authUser["username"])->get();

            //$infoConsultant = InfoConsultant::with('user')->where('id',1)->get();

            $query = InfoConsultant::query();

            if ($authUser['role'] == 'company') {
                $infoCompany = InfoCompany::get()->where('id', $infoUser[$authUser['id']-1]["info_company_id"])->first();
                $query->where('id',$infoCompany["consultant_id"])->first();
            }
            if ($authUser['role'] == 'consultant') {
                //$query->where('id',$infoUser[$authUser['id']-1]["info_consultant_id"])->first();
                return $infoUser;
                $query = InfoConsultant::with('user')->where('id',$infoUser['info_consultant_id'])->get();
                return $query;
            }
            if ($authUser['role'] == 'pa_user') {
            }

            $data = $query->get();

            return response()->json($data, 200);
            
        } catch (Exception $e) {

            return response()->json([
                'message' => "Error in retriving data through InfoConsultant",
                'status_code' => 500
            ], 500);
        }
    }
}
