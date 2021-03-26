<?php

namespace App\Http\Controllers;

use App\Models\DiseaseForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DiseaseFormController extends Controller
{
    public function list(Request $Request) {

        return DiseaseForm::all();
    }

    public function create(Request $Request) {
        
    }

    public function edit(Request $Request) {
        
    }

    public function store(Request $request) {
        $newPracticeData = json_decode($request->getContent(), true);

        $validator = Validator::make($newPracticeData, [
            "practice.trimester" => "required",
            "practice.ordinary_work_hours" => "required",
            "practice.disease_hours" => "required",
            "practice.weekly_working_hours" => "required",
            "practice.total_hours" => "required",
            "practice.disease_start_date" => "required",
            "practice.disease_end_date" => "required",
            "practice.total_disease_days" => "required",
            "practice.total_final" => "required",
            // TODO: add field here
        ]);

        if ($validator->fails()) {
            return response()->json([
                "errors" => $validator->errors()
            ], 422);
        }

        $newPracticeModel = new DiseaseForm();

        $newPracticeModel->fill(array_merge(
            [
                "company_id" => $newPracticeData['company']['id'],
                "employee_id" => $newPracticeData['employee']['id'],
                "creator_id" => Auth::user()->id,
                "status" => "in progress",
            ],
            $newPracticeData['practice'])
        );

        $newPracticeModel->save();

        return response()->json($newPracticeModel->id, 201);
    }
}
