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
        Schema::create('evm_networks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('chain_id')->unique();
            $table->string('name');
            $table->string('short_name');
            $table->string('description');
            $table->boolean('active', true);
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
        Schema::dropIfExists('evm_networks');
    }
};
