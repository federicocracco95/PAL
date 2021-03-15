<?php

use App\Models\InfoConsultant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AddConsultants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_consultants', function (Blueprint $table){
          
            $newinfo_consultants = new InfoConsultant();

            $newinfo_consultants->name = "Paolo";
            $newinfo_consultants->surname = "Rossi";

            $newinfo_consultants->save();

            $newinfo_consultants = new InfoConsultant();

            $newinfo_consultants->name = "Mirco";
            $newinfo_consultants->surname = "Ferrari";

            $newinfo_consultants->save();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
