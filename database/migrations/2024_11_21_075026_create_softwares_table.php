<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softwares', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('short_title')->nullable();
            $table->longText('short_des')->nullable();
            $table->string('banner_image')->nullable();

            $table->string('image1')->nullable();
            $table->longText('des1')->nullable();
            $table->string('image2')->nullable();
            $table->longText('des2')->nullable();
            $table->string('image3')->nullable();
            $table->longText('des3')->nullable();
            $table->string('image4')->nullable();
            $table->longText('des4')->nullable();
            $table->string('image5')->nullable();
            $table->longText('des5')->nullable();
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
        Schema::dropIfExists('softwares');
    }
}
