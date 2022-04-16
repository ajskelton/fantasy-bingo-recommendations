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
        Schema::create('book_square', function (Blueprint $table) {
            $table->integer('book_id')->unsigned();
            $table->integer('square_id')->unsigned();

            $table->foreign('book_id')
                ->references('id')
                ->on('books')
                ->onDelete('cascade');

            $table->foreign('square_id')
                  ->references('id')
                  ->on('squares')
                  ->onDelete('cascade');

            $table->boolean('hard_mode');

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
        Schema::dropIfExists('book_square');
    }
};
