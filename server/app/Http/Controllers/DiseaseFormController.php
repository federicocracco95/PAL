<?php

namespace App\Http\Controllers;

use App\Models\DiseaseForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiseaseFormController extends Controller
{
    public function list(Request $Request) {

        return DiseaseForm::all();
    }

    public function create(Request $Request) {
        
    }

    public function edit(Request $Request) {
        
    }

}
