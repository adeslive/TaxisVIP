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
            $table->boolean('status')->default('0');
            $table->boolean('careerstatus')->nullable()->default('0');
            $table->decimal('mileage')->nullable()->default('0');
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('zones_id')->nullable();
            $table->foreign('zones_id')->references('id')->on('zones');
            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users');
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
