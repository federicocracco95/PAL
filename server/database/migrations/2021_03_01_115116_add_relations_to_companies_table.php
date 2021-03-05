<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->bigInteger("creator_id")->unsigned()->nullable();
            $table
                ->foreign("creator_id")
                ->references("id")
                ->on("pa_users")
                ->onDelete("cascade");

            $table->bigInteger("consultant_id")->unsigned()->nullable();
            $table
                ->foreign("consultant_id")
                ->references("id")
                ->on("consultants")
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
        Schema::table('companies', function (Blueprint $table) {
            $table->dropForeign("creator_id");
            $table->dropColumn("creator_id");

            $table->dropForeign("consultant_id");
            $table->dropColumn("consultant_id");
        });
    }
}
