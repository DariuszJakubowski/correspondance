<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->smallInteger('priority')->comment('1|2|3 istotne przy czestotliwosci powieadomien');
            $table->boolean('incoming')->comment('1 - przychodząca; 0 - wychodząca');
            $table->string('format', 10)->comment('email | letter');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('thread_id')->comment('Id wątku');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('current_recipient')->comment('Tymczasowy/bieżący odbiorca');
            $table->unsignedInteger('recipient')->comment('Docelowy właściciel, czyli ktoś kto zatwierdzi odbiór');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('current_recipient')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('thread_id')
                ->references('id')
                ->on('threads')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
        Schema::enableForeignKeyConstraints();
    }
}
