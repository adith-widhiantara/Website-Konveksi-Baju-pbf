<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_kain');
            $table->string('nama_kain');
            $table->string('gambar_kain');
            $table->string('id_baju');
            $table->string('nama_baju');
            $table->string('gambar_baju');
            $table->string('id_desain');
            $table->string('nama_desain');
            $table->string('gambar_desain');
            $table->string('ukuran');
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
        Schema::dropIfExists('buys');
    }
}
