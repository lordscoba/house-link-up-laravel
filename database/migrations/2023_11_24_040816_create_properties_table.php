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
        // Schema::create('properties', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

            Schema::table('properties', function (Blueprint $table) {
            $table->text('state')->nullable();
            $table->text('lga')->nullable();
            $table->text('town')->nullable();
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