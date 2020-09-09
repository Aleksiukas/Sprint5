<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDarbuotojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darbuotojas', function (Blueprint $table) {
            $table->id();
            $table->string('darbuotojai');
            $table->bigInteger('projektas_id')->unsigned();
            $table->timestamps();
            $table->foreign('projektas_id')->references('id')->on('projektas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('darbuotojas');
    }
}
