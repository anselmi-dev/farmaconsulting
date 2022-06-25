<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landings', function (Blueprint $table) {
            $table->id();
            $table->string('qr')->unique();
            $table->longText('breadcrumb')->nullable();
            $table->longText('content')->nullable();
            $table->boolean('redirect')->default(false)->nullable();
            $table->longText('redirect_url')->nullable();
            $table->boolean('active')->default(true)->nullable();
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
        Schema::dropIfExists('landings');
    }
}
