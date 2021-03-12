<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->bigInteger("creator_id")->unsigned()->nullable();
            $table
                ->foreign("creator_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
                
            $table->bigInteger("company_id")->unsigned()->nullable();
            $table
                ->foreign("company_id")
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
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign("creator_id");
            $table->dropColumn("creator_id");

            $table->dropForeign("company_id");
            $table->dropColumn("company_id");
        });
    }
}
