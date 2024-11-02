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
        Schema::create('tb_schedule_pm', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->enum('status', ['done', 'not done']);
            $table->foreignId('device_id')->nullable();
            $table->foreign('device_id')->references('id')->on('tb_device');
            $table->foreignId('inspection_id')->nullable();
            $table->foreign('inspection_id')->references('id')->on('tb_inspection');
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
        Schema::dropIfExists('tb_schedule_pm');
    }
};
