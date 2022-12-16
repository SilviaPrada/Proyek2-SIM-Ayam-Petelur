<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePencatatanAyamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencatatan_ayam', function (Blueprint $table) {
            $table->id();
            $table->enum('waktu', ['Pagi', 'Sore']);
            $table->integer('kolom_id');
            $table->enum('produktifitas', ['Bertelur', 'Tidak Bertelur']);
            $table->enum('kondisi', ['Sehat', 'Sakit', 'Mati', 'Afkir']);
            $table->integer('jumlah_telur');
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
        Schema::dropIfExists('pencatatan_ayam');
    }
}
