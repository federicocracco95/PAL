<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseaseFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_forms', function (Blueprint $table) {
            $table->id();
            $table->boolean('extraprofessional_incident');
            $table->boolean('car_crash');
            $table->integer('trimester');
            $table->integer('ordinary_work_hours');
            $table->integer('disease_hours');
            $table->integer('cig_hours');
            $table->integer('holidays_and_remunerated_permissions_hours');
            $table->integer('other_remunerated_hours');
            $table->integer('total_hours');
            $table->integer('weekly_working_hours');
            $table->string('disease_start_date');
            $table->string('disease_end_date');
            $table->string('total_disease_days');
            $table->timestamps();
            $table->string('status');
            $table->string('creator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disease_forms');
    }
}
