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
            $table->integer('user_id')->nullable($value = true);
            $table->integer('product_id')->nullable($value = true);
            $table->integer('desain_id')->nullable($value = true);
            $table->integer('color_id')->nullable($value = true);
            $table->integer('statuspembayaran')->nullable($value = true);
            $table->integer('jumlah')->nullable($value = true);
            $table->string('ukuran')->nullable($value = true);
            $table->string('resi')->nullable($value = true);
            $table->integer('biaya')->nullable($value = true);
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
