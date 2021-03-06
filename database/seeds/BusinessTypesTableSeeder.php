<?php

use Illuminate\Database\Seeder;

class BusinessTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_types')->insert([
            [
                'name' => 'ห้างหุ้นส่วนสามัญ'
            ],
            [
                'name' => 'ห้างหุ้นส่วนจำกัด'
            ],
            [
                'name' => 'บริษัทจำกัด'
            ],
            [
                'name' => 'บริษัทมหาชนจำกัด'
            ]
        ]);
    }
}
