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
        Schema::create('tb_device', function (Blueprint $table) {
            $table->id();
            $table->string('device_name', 100);
            $table->string('ip_address', 100);
            $table->string('merk', 100);
            $table->string('spesifikasi', 100);
            $table->foreignId('location_id')->nullable();
            $table->foreign('location_id')->references('id')->on('tb_location');
            $table->foreignId('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('tb_category');
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
        Schema::dropIfExists('tb_device');
    }
};
