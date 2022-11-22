<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormReplacementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_replacements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('namaLengkap')->nullable();
            $table->string('mataKuliah')->nullable();
            $table->string('kelas')->nullable();
            $table->string('programStudi')->nullable();
            $table->string('semester')->nullable();
            $table->string('tahunAkademik')->nullable();
            $table->date('tanggalReplacement')->nullable();
            $table->date('jamKuliah')->nullable();
            $table->time('jamreplacement')->nullable();
            $table->string('alasan')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_replacements');
    }
}
