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
            $table->string('waktu', 200);
            $table->integer('kolom_id');
            $table->string('produktifitas', 200);
            $table->string('kondisi', 200);
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
