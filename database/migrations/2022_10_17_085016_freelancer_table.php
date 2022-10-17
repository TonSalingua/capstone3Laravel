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
    public function up() // makes table
    {
        Schema::create('freelancer', function (Blueprint $table) {
            $table->id();
            $table->string('freelancer_name');
            $table->string('freelancer_email');
            $table->string('freelancer_status')->nullable();
            $table->string('freelancer_role');
            $table->string('freelancer_contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
