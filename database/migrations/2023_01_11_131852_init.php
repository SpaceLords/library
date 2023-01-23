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
        //
        Schema::create('books', function(Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->integer('year')->nullable(false);
            $table->timestamps();
        });

        Schema::create('authors', function(Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable(false);
            $table->timestamps();
        });

        Schema::create('books_authors', function(Blueprint $table) {
            $table->id();
            $table->integer('book_id');
            $table->integer('author_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('books_authors');
        Schema::drop('authors');
        Schema::drop('books');
    }
};
