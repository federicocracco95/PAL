<?php

use App\Models\DiseaseForm;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDiseaseForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('disease_forms',function (Blueprint $table){
            
            $newdisease_forms = new DiseaseForm();

            $newdisease_forms->extraprofessional_incident = "1";
            $newdisease_forms->car_crash = "0";
            $newdisease_forms->trimester = "1";
            $newdisease_forms->ordinary_work_hours = "8";
            $newdisease_forms->disease_hours = "24";
            $newdisease_forms->cig_hours = "1";
            $newdisease_forms->holidays_and_remunerated_permissions_hours = "80";
            $newdisease_forms->other_remunerated_hours = "0";
            $newdisease_forms->total_hours = "80";
            $newdisease_forms->weekly_working_hours = "0";
            $newdisease_forms->disease_start_date = "9/3/2021";
            $newdisease_forms->disease_end_date = "12/3/2021";
            $newdisease_forms->total_disease_days = "3";
            $newdisease_forms->status = "in progress";

            $newdisease_forms->save();

            $newdisease_forms = new DiseaseForm();

            $newdisease_forms->extraprofessional_incident = "1";
            $newdisease_forms->car_crash = "1";
            $newdisease_forms->trimester = "9";
            $newdisease_forms->ordinary_work_hours = "8";
            $newdisease_forms->disease_hours = "80";
            $newdisease_forms->cig_hours = "1";
            $newdisease_forms->holidays_and_remunerated_permissions_hours = "200";
            $newdisease_forms->other_remunerated_hours = "50";
            $newdisease_forms->total_hours = "250";
            $newdisease_forms->weekly_working_hours = "2";
            $newdisease_forms->disease_start_date = "19/2/2020";
            $newdisease_forms->disease_end_date = "29/2/2020";
            $newdisease_forms->total_disease_days = "10";
            $newdisease_forms->status = "completed";

            $newdisease_forms->save();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
