<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',250)->comment('ชื่อ original รูป');
            $table->string('file',250)->comment('พาร์ธรูป');
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
        Schema::dropIfExists('image_sliders');
    }
}
