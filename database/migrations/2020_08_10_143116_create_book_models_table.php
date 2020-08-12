<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('isbn');
            $table->string('authors');
            $table->string('country');
            $table->integer('number_of_pages');
            $table->string('publisher');
            $table->string('release_date');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
