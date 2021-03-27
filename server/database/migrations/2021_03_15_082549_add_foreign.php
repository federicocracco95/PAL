<?php

use App\Models\DiseaseForm;
use App\Models\Employee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\InfoConsultant;
use App\Models\InfoCompany;

class AddForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $fillUser = User::where('id', 2)->first();

            
            $fillUser->info_company_id = 1;

            $fillUser->save();

            $fillUser = User::where('id', 3)->first();

            $fillUser->info_consultant_id = 2;
            

            $fillUser->save();
        });

        Schema::table('info_consultants', function (Blueprint $table) {

            $fillConsultants = InfoConsultant::where('id', 1)->first();

            $fillConsultants->creator_id = 1;

            $fillConsultants->save();

            $fillConsultants = InfoConsultant::where('id', 2)->first();

            $fillConsultants->creator_id = 1;

            $fillConsultants->save();
        });

        Schema::table('info_companies', function (Blueprint $table) {

            $fillCompanies = InfoCompany::where('id', 1)->first();

            $fillCompanies->creator_id = 1;
            $fillCompanies->consultant_id = 1;

            $fillCompanies->save();

            $fillCompanies = InfoCompany::where('id', 2)->first();

            $fillCompanies->creator_id = 1;
            $fillCompanies->consultant_id = 2;

            $fillCompanies->save();
        });

        Schema::table('employees', function (Blueprint $table) {

            $fillEmployees = Employee::where('id', 1)->first();

            $fillEmployees->creator_id = 1;
            $fillEmployees->company_id = 1;

            $fillEmployees->save();

            $fillEmployees = Employee::where('id', 2)->first();

            $fillEmployees->creator_id = 1;
            $fillEmployees->company_id = 2;

            $fillEmployees->save();
        });

        Schema::table('disease_forms', function (Blueprint $table) {

            $fillForms = DiseaseForm::where('id', 1)->first();

            $fillForms->creator_id = 1;
            $fillForms->employee_id = 1;
            $fillForms->company_id = 1;

            $fillForms->save();

            $fillForms = DiseaseForm::where('id', 2)->first();

            $fillForms->creator_id = 1;
            $fillForms->employee_id = 2;
            $fillForms->company_id = 2;

            $fillForms->save();
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
