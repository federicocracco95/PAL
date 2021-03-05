<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToDiseaseFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('disease_forms', function (Blueprint $table) {
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
        Schema::table('disease_forms', function (Blueprint $table) {
            $table->dropForeign("employee_id");
            $table->dropColumn("employee_id");

            $table->dropForeign("company_id");
            $table->dropColumn("company_id");
        });
    }
}
