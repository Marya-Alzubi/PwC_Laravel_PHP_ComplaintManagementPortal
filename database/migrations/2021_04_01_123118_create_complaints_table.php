<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// one to many relationship (user has many complaints & the complaint belongs into one user)
class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            // the primary key
            $table->id();
            // the foreign key 
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('device_type');
            $table->string('generation');
            $table->string('serial_number');
            $table->string('problem_date');
            $table->string('errors');
            $table->string('problem_cause');
            $table->string('status')->default('pending');
            $table->string('is_urgent');
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
        Schema::dropIfExists('complaints');
    }
}
