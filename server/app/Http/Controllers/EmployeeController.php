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
            $data = Employee::get();
            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Error in listing all Employees",
                'status_code' => 500
            ], 500);
        }
    }
}
