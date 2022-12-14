<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJrwaCategoryVersionsTable extends Migration
{
    /**
     * Run the migrations.
     * JRWA ma statusy
     * old - były nieaktywny;
     * current - czyli obowiązujący
     * draft - czyli roboczy przyszły
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jrwa_category_versions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status', 20)->comment('old | current | draft');
            $table->string('comment', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jrwa_category_versions');
    }
}
