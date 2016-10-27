<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempahan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bilik_id')->unsigned();
            $table->date('tarikh_mula')->nullable();
            $table->date('tarikh_tamat')->nullable();
            $table->string('masa');
            $table->integer('jumlah_jam');
            $table->text('aktiviti');
            $table->string('nama_tempahan');
            $table->string('email_tempahan');
            $table->string('telefon_tempahan');
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
        Schema::dropIfExists('tempahan');
    }
}
