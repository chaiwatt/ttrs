<?php

use Illuminate\Database\Seeder;

class EducationLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education_levels')->insert([
            [
                'name' => 'มัธยมศึกษาตอนต้น'
            ],
            [
                'name' => 'มัธยมศึกษาตอนปลาย'
            ],
            [
                'name' => 'อนุปริญญา'
            ],
            [
                'name' => 'ปริญญาตรี'
            ],
            [
                'name' => 'อนุปริญญาโท'
            ],
            [
                'name' => 'ปริญญาโท'
            ],
            [
                'name' => 'ปริญญาเอก'
            ]
        ]);
    }
}
