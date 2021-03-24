<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\InfoCompany;
use App\Models\InfoConsultant;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function list(Request $req) {
        try {
            $authUser = Auth::user();
            $infoUser = User::get()->where('username',$authUser["username"]);

            $query = Employee::query();

            if ($authUser['role'] == 'company') {
                $infoCompany = InfoCompany::get()->where('id', $infoUser[$authUser['id']-1]["info_company_id"])->first();
                $query->where('id',$infoCompany["id"]);
            }
            if ($authUser['role'] == 'consultant') {
                $infoConsultant = InfoConsultant::get()->where('id', $infoUser[$authUser['id']-1]["info_consultant_id"])->first();
                $infoCompany = InfoCompany::get()->where('consultant_id', $infoConsultant['id']);
                return $infoCompany; //da finire
                //$query->where('company_id', $infoCompany[]);
                

                //$query->where('id',$infoUser[$authUser['id']-1]["info_consultant_id"])->first();
            }
            if ($authUser['role'] == 'pa_user') {
            }

            $data = $query->get();

            return response()->json([
                $data,
                'message' => "Employees data retrived",
                'status_code' => 200
            ], 200);

        } catch (Exception $e) {

            return response()->json([
                'message' => "Error in retriving data through Employee",
                'status_code' => 500
            ], 500);
        }
    }
}
