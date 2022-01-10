<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation', function (Blueprint $table) {
            $table->id();
            // $table->integer('blog_id');
            // $table->foreign('blog_id')->references('id')->on('blog');
            // $table->integer('category_id');
            // $table->foreign('category_id')->references('id')->on('category');
            // $table->foreignId('blog_id')->constrained('blog');
            // $table->foreignId('category_id')->constrained('category');

            $table->integer('blog_id')->unsigned();
            $table->integer('categorie_id')->unsigned();
            $table->foreign('blog_id')->references('id')->on('blog');
            $table->foreign('categorie_id')->references('id')->on('categorie');
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
        Schema::dropIfExists('relations');
    }
}
