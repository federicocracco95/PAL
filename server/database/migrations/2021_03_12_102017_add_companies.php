<?php

use App\Models\InfoCompany;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AddCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_companies',function (Blueprint $table){
            
            $newinfo_companies = new InfoCompany();

            $newinfo_companies->name = "CalcestruzzIvo";
            $newinfo_companies->cee_code = "123";
            $newinfo_companies->consultant_id = NULL;

            $newinfo_companies->save();

            $newinfo_companies = new InfoCompany();

            $newinfo_companies->name = "Mattone4L";
            $newinfo_companies->cee_code = "1234";
            $newinfo_companies->consultant_id = NULL;


            $newinfo_companies->save();


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
