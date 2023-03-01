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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('summary');
            $table->string('associated type');
            $table->string('authors');
            $table->string('article_magazine');
            $table->string('article_begin');
            $table->string('article_end');
            $table->string('client_name');
            $table->string('client_project');
            $table->string('monograph_subject');
            $table->string('monograph_page');


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
        Schema::dropIfExists('publications');
    }
};
