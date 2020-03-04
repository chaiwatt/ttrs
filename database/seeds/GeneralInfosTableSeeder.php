<?php

use Illuminate\Database\Seeder;

class GeneralInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_infos')->insert([
            [
                'company' => 'สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ',
                'phone' => '0-2564-7000, 0-2564-8000',
                'fax' => '0-2564-7001-5',
                'email' => 'info@nstda.or.th',
                'address' => '111 อุทยานวิทยาศาสตร์ประเทศไทย ถนนพหลโยธิน ตำบลคลองหนึ่ง อำเภอคลองหลวง จังหวัดปทุมธานี 12120'
            ],
        ]);
    }
}
