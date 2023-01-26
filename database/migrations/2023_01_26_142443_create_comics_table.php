<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string ('title');
            $table->longText ('description');
            $table->string ('series');
            $table->string ('type');
            $table->float("price", 6, 2);
            $table->dateTime('sale_date');
            $table->string ('artists');
            $table->string ('writers');
            $table->string ('thumb');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
};
