<?php

namespace App\Http\Controllers;

use App\Models\DiseaseForm;
use App\Models\Employee;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DiseaseFormController extends Controller
{
    public function listcheck(Request $Request) {

        try {
            $data = DiseaseForm::where('status', 'check')->with('employee')->get();
            //$data = DiseaseForm::with('employee')->get();
            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Error in listing all DiseaseForms",
                'status_code' => 500
            ], 500);
        }
    }

    public function listapproved(Request $Request) {

        try {
            //$data = DiseaseForm::with('employee')->where('status', 'approved')->get();
            $data = DiseaseForm::where('status', 'approved')->with('employee')->get();
            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Error in listing all DiseaseForms approved",
                'status_code' => 500
            ], 500);
        }
    }

    public function listnotapproved(Request $Request) {

        try {
            //$data = DiseaseForm::with('employee')->where('status')->get();
            $data = DiseaseForm::where('status', 'not_approved')->with('employee')->get();
            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Error in listing all DiseaseForms not approved",
                'status_code' => 500
            ], 500);
        }
    }

    public function approve(Request $Request, $id) {
        $form = DiseaseForm::where('id', $id);
        try {
            $form->update(['status' => 'approved']);
            return response()->json([
                'message' => "Form approved",
                'status_code' => 201
            ], 201);
        } catch (Exception $e) {
            $form->update(['status' => 'not_approved']);
            return response()->json([
                'message' => "Error: approve not successful",
                'status_code' => 500
            ], 500);
        }
    }

    public function notapprove(Request $Request, $id) {
        $form = DiseaseForm::where('id', $id);
        try {
            $form->update(['status' => 'not_approved']);
            return response()->json([
                'message' => "Form not approved",
                'status_code' => 201
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Error: not approve not successful",
                'status_code' => 500
            ], 500);
        }
    }

    public function delete(Request $Request, $id) {
        $form = DiseaseForm::where('id', $id);
        try {
            $form->delete();
            return response()->json([
                'message' => "Form deleted",
                'status_code' => 201
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Error: not deleted",
                'status_code' => 500
            ], 500);
        }
    }

    public function getForm(Request $Request, $id) {
        try {
            $data = DiseaseForm::with([
                'company',
                'employee'
            ])
            ->where('id', $id)
            ->get();

            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Error in retreiving a specific DiseaseForm",
                'status_code' => 500
            ], 500);
        }
        return DiseaseForm::where('id', $id);
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
                "status" => "check",
            ],
            $newPracticeData['practice'])
        );

        $newPracticeModel->save();

        return response()->json($newPracticeModel->id, 201);
    }

    public function edit(Request $Request) {

    }
}
