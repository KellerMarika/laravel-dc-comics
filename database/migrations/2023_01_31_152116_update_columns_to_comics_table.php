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
        Schema::table('comics', function (Blueprint $table) {

            $table->string('title',100)->change();
            $table->longText ('description')->nullable()->change();
            $table->string ('series')->nullable()->change();
            $table->string ('type',30)->default('comicx-default')->comment('textarea')->change();
            $table->float("price", 6, 2)->comment('number')->change();
            $table->dateTime('sale_date')->comment('date')->change();
            $table->string ('thumb')->nullable('https://st2.depositphotos.com/1006899/8089/i/600/depositphotos_80897014-stock-photo-page-not-found.jpg')->change();
            $table->boolean('available')->nullable()->default(false);
            $table->integer('qta')->nullable()->default(0);
            $table->enum('difficulty', ['easy','medium', 'hard'])->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
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
};
