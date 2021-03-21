<?php

namespace App\Http\Controllers;

use App\Models\InfoCompany;
use App\Models\InfoConsultant;
use DB;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;

class InfoCompanyController extends Controller
{
    public function getCompanies(Request $req) {
        try {
            $authUser = Auth::user();
            $infoUser = User::get()->where('username',$authUser["username"]);

            //$query = InfoCompany::query();
            $query = InfoCompany::query();

            
            if ($authUser['role'] == 'company') {
                //$query = "SELECT * from info_companies WHERE id = '".$infoUser['info_company_id']."'";
                //$query = InfoCompany::get()->where('id',$infoUser["info_company_id"]);
                $query->where('id',$infoUser[0]["info_company_id"])->first();
            }

            if ($authUser['role'] == 'pa_user') {
            }

            if ($authUser['role'] === 'consultant') {
                //$infoConsultant = InfoConsultant::get()->where('id',$infoUser[0]["info_consultant_id"])->first();
                return $infoUser[0]["info_consultant_id"];
                //$query->where('consultant_id',$infoUser[0]["info_company_id"])->first();
            }

            $data = $query->get();

            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json("error", 500);
        }
    }
}
