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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('order_id')->nullable();
            $table->integer('amount')->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->nullable(); // business
            $table->boolean('success')->nullable();
            $table->boolean('processing')->nullable();
            $table->boolean('failed')->nullable();
            $table->integer('created')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('expired')->nullable();
            $table->string('authorization_url')->nullable();
            $table->string('access_code')->nullable();
            $table->string('status')->nullable();
            $table->string('reference')->nullable();
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
        Schema::dropIfExists('payments');
    }
};