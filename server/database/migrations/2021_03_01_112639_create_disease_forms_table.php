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
            $table->integer('days_not_cleared_1')->nullable();
            $table->integer('days_cleared_1')->nullable();
            $table->integer('daily_amount_1')->nullable();
            $table->integer('days_not_cleared_2')->nullable();
            $table->integer('days_cleared_2')->nullable();
            $table->integer('daily_amount_2')->nullable();
            $table->integer('days_not_cleared_3')->nullable();
            $table->integer('days_cleared_3')->nullable();
            $table->integer('daily_amount_3')->nullable();
            $table->integer('days_not_cleared_4')->nullable();
            $table->integer('days_cleared_4')->nullable();
            $table->integer('daily_amount_4')->nullable();
            $table->integer('days_not_cleared_5')->nullable();
            $table->integer('days_cleared_5')->nullable();
            $table->integer('daily_amount_5')->nullable();
            $table->integer('days_not_cleared_6')->nullable();
            $table->integer('days_cleared_6')->nullable();
            $table->integer('daily_amount_6')->nullable();
            $table->integer('total_final')->nullable();

            $table->timestamps();
            $table->string('status');
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
