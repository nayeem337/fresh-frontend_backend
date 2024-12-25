<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id();
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
            $table->string('image6')->nullable();
            $table->longText('des6')->nullable();
            $table->string('image7')->nullable();
            $table->longText('des7')->nullable();
            $table->string('image8')->nullable();
            $table->longText('des8')->nullable();
            $table->longText('detail')->nullable();
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
        Schema::dropIfExists('company_infos');
    }
}
