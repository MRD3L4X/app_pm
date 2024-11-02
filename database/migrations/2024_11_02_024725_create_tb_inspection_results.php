<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_inspection_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schedule_pm_id')->nullable();
            $table->foreign('schedule_pm_id')->references('id')->on('tb_schedule_pm');
            $table->foreignId('officer_id')->nullable();
            $table->foreign('officer_id')->references('id')->on('tb_officers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_inspection_results');
    }
};
