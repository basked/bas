<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotStatusesTable extends Migration
{
    /**
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('current_status_id')->nullable();
            $table->foreign('current_status_id')->references('id')->on('statuses');
            $table->unsignedBigInteger('next_status_id')->nullable();
            $table->foreign('next_status_id')->references('id')->on('statuses');
            $table->boolean('access');
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
        Schema::dropIfExists('pivot_statuses');
    }
}
