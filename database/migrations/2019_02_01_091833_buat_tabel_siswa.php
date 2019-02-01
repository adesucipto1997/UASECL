<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('tabel_siswa', function (Blueprint $table) {
           $table->increments('id_siswa');
           $table->string('nama_lengkap',20);
           $table->string('foto',100);
           $table->enum('jk',["laki-laki","perempuan"]);
           $table->unsignedInteger('id_kelas');
           $table->timestamps();
           $table->foreign('id_kelas')->references('id_kelas')->on('tabel_kelas')->onDelete('cascade');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('tabel_siswa');
     }
}
