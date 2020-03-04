<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'name' => 'ไทย'
            ],
            [
                'name' => 'อังกฤษ'
            ],
            [
                'name' => 'จีน'
            ],
            [
                'name' => 'สหรัฐอเมริกา'
            ],
            [
                'name' => 'แคนาดา'
            ],
            [
                'name' => 'อังกฤษ'
            ],
            [
                'name' => 'ญี่ปุ่น'
            ],
            [
                'name' => 'อินเดีย'
            ]
        ]);
    }
}
