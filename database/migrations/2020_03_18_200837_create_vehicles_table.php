<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('color', 45);
            $table->string('motor', 45);
            $table->string('vin', 45);
            $table->string('vehiclelicense', 45);
            $table->string('brand', 45);
            $table->string('model', 45);
            $table->boolean('designated')->default(0);
            $table->unsignedBigInteger('drivers_id');
            $table->foreign('drivers_id')->references('id')->on('drivers');
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
        Schema::dropIfExists('vehicles');
    }
}
