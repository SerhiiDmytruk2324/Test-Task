<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksToAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_to_authors', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('author_id')->unsigned();
            $table->integer('book_id')->unsigned();

            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('book_id')->references('id')->on('books');
//            $table->index('on_sale');

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
        Schema::dropIfExists('books_to_authors');
    }
}
