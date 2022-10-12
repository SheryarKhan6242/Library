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
        Schema::create('reports', function (Blueprint $table) {
            $table->id('rep_id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('readers')->onDelete('cascade');
            $table->bigInteger('book_id')->unsigned();
            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('cascade');
            $table->date('issue_date');
            $table->date('return_date');
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
        Schema::dropIfExists('reports');
    }
};