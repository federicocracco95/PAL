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
            $table->bigInteger("info_consultant_id")->unsigned()->nullable()->default(NULL);
            $table
                ->foreign("info_consultant_id")
                ->references("id")
                ->on("info_consultants")
                ->onDelete("cascade");

            $table->bigInteger("info_company_id")->unsigned()->nullable()->default(NULL);
            $table
                ->foreign("info_company_id")
                ->references("id")
                ->on("info_companies")
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
            $table->dropForeign("info_consultants_id");
            $table->dropColumn("info_consultants_id");

            $table->dropForeign("info_company_id");
            $table->dropColumn("info_company_id");
        });
    }
}
