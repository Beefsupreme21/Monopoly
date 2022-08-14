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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color')->default('blue');
            $table->string('cost');
            $table->string('rent');
            $table->string('rentColorSet');
            $table->string('rentOneHouse');
            $table->string('rentTwoHouse');
            $table->string('rentThreeHouse');
            $table->string('rentFourHouse');
            $table->string('rentHotel');
            $table->string('mortgage');
            $table->string('houseCost');
            $table->string('position');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
