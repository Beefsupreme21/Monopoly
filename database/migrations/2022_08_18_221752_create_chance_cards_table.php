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
        Schema::create('chance_cards', function (Blueprint $table) {
            $table->id();
            $table->string('version')->nullable();
            $table->string('message')->nullable();
            $table->string('image');
            $table->string('amount')->nullable();
            $table->string('canHold');
            $table->string('goToProperty')->nullable();
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
        Schema::dropIfExists('chance_cards');
    }
};
