<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AddUsersToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $newUser = new User();

            $newUser->username = "darocrife";
            $newUser->email = "daro@gmail.com";
            $newUser->password = Hash::make("darocrife");
            $newUser->is_pa_user = TRUE;
            $newUser->info_consultant_id = NULL;
            $newUser->info_company_id = NULL;
            
            $newUser->save();

            
            $newUser = new User();

            $newUser->username = "prova";
            $newUser->email = "prova@gmail.com";
            $newUser->password = Hash::make("password");
            $newUser->is_consultant = TRUE;
            $newUser->info_consultant_id = NULL;
            $newUser->info_company_id = NULL;
            
            $newUser->save();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('darocrife');
        Schema::dropIfExists('prova');
    }
}
