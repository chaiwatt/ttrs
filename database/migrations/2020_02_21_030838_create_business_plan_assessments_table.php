<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessPlanAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_plan_assessments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('business_plan_id');
            $table->foreign('business_plan_id')->references('id')->on('business_plans')->onDelete('cascade');
            $table->char('historyscore',2)->comment('คะแนน ประวัติความเป็นมา หรือแนวคิดในการจัดตั้งธุรกิจ')->nullable();
            $table->text('history')->comment('ความเห็น/ข้อมูลเพิ่มเติม ประวัติความเป็นมา หรือแนวคิดในการจัดตั้งธุรกิจ')->nullable();
            $table->char('performancescore',2)->comment('การประเมินด้าน ประวัติความเป็นมา หรือแนวคิดในการจัดตั้งธุรกิจ')->nullable();
            $table->text('performance')->comment('คะแนน ผลการดำเนินการที่ผ่านมาของธุรกิจที่ผ่านมา')->nullable();
            $table->char('marketanalysescore',2)->comment('ความเห็น/ข้อมูลเพิ่มเติม การประเมินด้าน ผลการดำเนินการที่ผ่านมาของธุรกิจที่ผ่านมา')->nullable();
            $table->text('marketanalyse')->comment('คะแนน การวิเคราะห์ตลาด')->nullable();
            $table->char('marketopponentscore',2)->comment('ความเห็น/ข้อมูลเพิ่มเติม การประเมินด้าน การวิเคราะห์ตลาด')->nullable();            
            $table->text('marketopponent')->comment('ความเห็น/ข้อมูลเพิ่มเติมการประเมินด้าน คู่แข่งการตลาด')->nullable();
            $table->unsignedBigInteger('user_id')->comment('ID ผู้ประเมิน');
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
        Schema::dropIfExists('business_plan_assessments');
    }
}
