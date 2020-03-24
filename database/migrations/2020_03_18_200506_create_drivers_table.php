<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('license', 45)->unique()->nullable();
            $table->boolean('status');
            $table->boolean('careerstatus')->nullable();
            $table->decimal('mileage')->nullable();
            $table->unsignedBigInteger('zones_id')->nullable();
            $table->foreign('zones_id')->references('id')->on('zones');
            $table->unsignedBigInteger('persons_id');
            $table->foreign('persons_id')->references('id')->on('persons');
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
        Schema::dropIfExists('drivers');
    }
}
