<?php

namespace App\Http\Controllers;

use App\Models\InfoCompany;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InfoCompanyController extends Controller
{
    public function getCompanies(Request $Request) {
        $data = InfoCompany::get();
        
        return $data;
    }
}
