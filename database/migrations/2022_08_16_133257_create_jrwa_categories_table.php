<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJrwaCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jrwa_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('jrwa_category_version_id');
            $table->string('class_number',4);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('jrwa_category_version_id')
                ->references('id')
                ->on('jrwa_category_versions');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jrwa_categories');
    }
}
