<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarisKandangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baris_kandang', function (Blueprint $table) {
            $table->id();
            $table->integer('baterai_id');
            $table->string('nama_baris', 50);
            $table->string('jumlah_kolom_ayam');
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
        Schema::dropIfExists('baris_kandang');
    }
}
