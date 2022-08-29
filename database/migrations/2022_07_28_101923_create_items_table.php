<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->smallInteger('priority')->comment('1|2|3 istotne przy czestotliwosci powieadomien');
            $table->string('type')->comment('email|letter');
            $table->unsignedInteger('thread_id');
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
        Schema::dropIfExists('items');
        Schema::enableForeignKeyConstraints();
    }
}
