<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYieldHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yield_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial_number');
            $table->string('printer_id')->nullable();
            $table->string('printer_name')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('organization_id')->nullabl();
            $table->string('ticket_number')->nullable();
            $table->string('cro_number');
            $table->string('initial_reading')->nullable();
            $table->string('new_reading');
            $table->string('yield')->nullable();
            $table->string('request_date')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('toner_serial_number')->nullable();
            $table->string('toner_changed')->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('yield_history');
    }
}
