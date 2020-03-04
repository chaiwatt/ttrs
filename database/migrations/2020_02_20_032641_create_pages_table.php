<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('page_category_id');
            $table->foreign('page_category_id')->references('id')->on('page_categories')->onDelete('cascade');
            $table->unsignedBigInteger('page_status_id')->default(1);
            $table->date('public_date')->comment('วันที่ให้แสดง');
            $table->string('feature',250);
            $table->string('title',150);
            $table->string('slug',150);
            $table->string('description',200);            
            $table->longText('details');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('pages');
    }
}
