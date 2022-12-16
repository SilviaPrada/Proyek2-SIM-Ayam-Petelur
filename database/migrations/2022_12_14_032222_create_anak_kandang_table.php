<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnakKandangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak_kandang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_ktp', 30);
            $table->string('nama_anak_kandang', 50);
            $table->enum('jk', ['L', 'P']);
            $table->string('telp', 15)->nullable();
            $table->string('tmp_lahir', 50)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('foto_anak_kandang');
            $table->integer('baterai_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anak_kandang');
    }
}
