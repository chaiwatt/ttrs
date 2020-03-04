<?php

use Illuminate\Database\Seeder;

class PageStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_statuses')->insert([
            [
                'name' => 'แสดง'
            ],
            [
                'name' => 'ปิดการแสดง'
            ],
        ]);
    }
}
