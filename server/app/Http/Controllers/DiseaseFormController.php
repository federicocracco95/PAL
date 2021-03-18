<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DiseaseFormController extends Controller
{
    public function get(Request $Request) {
        $data = DB::table('projects')->limit(9)->get();
        return $data;
    }
}
