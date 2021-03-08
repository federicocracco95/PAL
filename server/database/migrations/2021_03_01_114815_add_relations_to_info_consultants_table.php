<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToInfoConsultantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_consultants', function (Blueprint $table) {
            $table->bigInteger("creator_id")->unsigned()->nullable();
            $table
                ->foreign("creator_id")
                ->references("id")
                ->on("users")
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
        Schema::table('info_consultants', function (Blueprint $table) {
            $table->dropForeign("creator_id");
            $table->dropColumn("creator_id");
        });
    }
}
