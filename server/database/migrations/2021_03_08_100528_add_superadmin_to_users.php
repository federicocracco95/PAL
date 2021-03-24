<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AddSuperadminToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $superadmin = new User();
            $superadmin->username = "superadmin";
            $superadmin->email = "superadmin@superadmin.com";
            $superadmin->password = Hash::make("password");
            $superadmin->role = "pa_user";
            $superadmin->info_consultant_id = NULL;
            $superadmin->info_company_id = NULL;
            
            $superadmin->save();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('superadmin');
    
    }
}
