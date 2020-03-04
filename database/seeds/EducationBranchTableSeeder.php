<?php

use Illuminate\Database\Seeder;

class EducationBranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education_branches')->insert([
            [
                'name' => 'วิทย์-คณิต'
            ],
            [
                'name' => 'ศิลป์ ภาษา'
            ],
            [
                'name' => 'วิทยาศาสตร์'
            ],
            [
                'name' => 'วิศวกรรมศาสตร์'
            ],
            [
                'name' => 'เกษตรศาสตร์'
            ],
            [
                'name' => 'วนศาสตร์'
            ],
            [
                'name' => 'จิตวิทยา'
            ],
            [
                'name' => 'แพทยศาสตร์'
            ],
            [
                'name' => 'ทันตแพทยศาสตร์'
            ],
            [
                'name' => 'พยาบาลศาสตร์'
            ],
            [
                'name' => 'เภสัชศาสตร์'
            ],
            [
                'name' => 'บัญชี'
            ],
            [
                'name' => 'การตลาด'
            ],
            [
                'name' => 'ศิลปศาสตร์'
            ],
            [
                'name' => 'มนุษย์ศาสตร์'
            ],
            [
                'name' => 'อักษรศาสตร์'
            ],
            [
                'name' => 'นิติศาสตร์'
            ],
            [
                'name' => 'รัฐศาสตร์'
            ],
            [
                'name' => 'สื่อสารมวลชน'
            ],
            [
                'name' => 'นิเทศศาสตร์'
            ],
            [
                'name' => 'เภสัชศาสตร์'
            ],
            [
                'name' => 'ครุศาสตร์'
            ]
        ]);
    }
}
