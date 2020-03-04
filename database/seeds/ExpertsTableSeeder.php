<?php

use Illuminate\Database\Seeder;

class ExpertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefixes')->insert([
            [
                'name' => 'นาย'
            ],
            [
                'name' => 'นาง'
            ],
            [
                'name' => 'นางสาว'
            ],
            [
                'name' => 'ดร.'
            ],
            [
                'name' => 'ผศ.'
            ],
            [
                'name' => 'ผศ ดร.'
            ]
        ]);
    }
}
