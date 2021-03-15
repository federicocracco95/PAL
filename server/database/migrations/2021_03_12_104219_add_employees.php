<?php

use App\Models\Employee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees',function (Blueprint $table){
            
            $newemployees = new Employee();

            $newemployees->name = "Enrico";
            $newemployees->surname = "Menta";
            $newemployees->birth_date = "24/11/1990";
            $newemployees->residence = "Via Carducci";
            $newemployees->province = "Verona";
            $newemployees->cap = "37121";
            $newemployees->fiscal_code = "ENRMNT90S24A459C";
            $newemployees->cee_code = "ABC";
            $newemployees->position = "Oparaio Edile";
            $newemployees->salary = "1300";
            $newemployees->hire_date = "7/1/2018";
            

            $newemployees->save();

            $newemployees = new Employee();

            $newemployees->name = "Pietro";
            $newemployees->surname = "Salvia";
            $newemployees->birth_date = "11/6/1970";
            $newemployees->residence = "Via Selva";
            $newemployees->province = "Montebello Vicentino";
            $newemployees->cap = "36054";
            $newemployees->fiscal_code = "PTRSLV70S11A459C";
            $newemployees->cee_code = "ABCD";
            $newemployees->position = "Capo Cantiere";
            $newemployees->salary = "2100";
            $newemployees->hire_date = "17/3/2010";
            

            $newemployees->save();

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
