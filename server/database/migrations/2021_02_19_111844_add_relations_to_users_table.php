<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger("role_id")->unsigned()->nullable();
            $table
                ->foreign("role_id")
                ->references("id")
                ->on("roles")
                ->onDelete("cascade");

            $table->bigInteger("user_info_id")->unsigned()->nullable();
            $table
                ->foreign("user_info_id")
                ->references("id")
                ->on("user_infos")
                ->onDelete("cascade");

            $table->bigInteger("employee_id")->unsigned()->nullable();
            $table
                ->foreign("employee_id")
                ->references("id")
                ->on("employees")
                ->onDelete("cascade");

            $table->bigInteger("company_id")->unsigned()->nullable();
            $table
                ->foreign("company_id")
                ->references("id")
                ->on("companies")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign("role_id");
            $table->dropColumn("role_id");

            $table->dropForeign("user_info_id");
            $table->dropColumn("user_info_id");

            $table->dropForeign("employee_id");
            $table->dropColumn("employee_id");

            $table->dropForeign("company_id");
            $table->dropColumn("company_id");
        });
    }
}
