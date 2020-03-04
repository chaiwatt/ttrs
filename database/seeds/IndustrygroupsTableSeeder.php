<?php

use Illuminate\Database\Seeder;

class IndustrygroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('industry_groups')->insert([
            [
                'name' => 'เกษตรและอุตสาหกรรมอาหาร', //1
                'slug' => 'เกษตรและอุตสาหกรรมอาหาร1',
                'parent_id' => 0  
            ],
            [
                'name' => 'สินค้าอุปโภคบริโภค', //2
                'slug' => 'สินค้าอุปโภคบริโภค',
                'parent_id' => 0  
            ],
            [
                'name' => 'ธุรกิจการเงิน', //3
                'slug' => 'ธุรกิจการเงิน',
                'parent_id' => 0  
            ],
            [
                'name' => 'สินค้าอุตสาหกรรม', //4
                'slug' => 'สินค้าอุตสาหกรรม',
                'parent_id' => 0  
            ],
            [
                'name' => 'อสังหาริมทรัพย์และก่อสร้าง', //5
                'slug' => 'อสังหาริมทรัพย์และก่อสร้าง',
                'parent_id' => 0  
            ],
            [
                'name' => 'ทรัพยากร', //6
                'slug' => 'ทรัพยากร',
                'parent_id' => 0  
            ],
            [
                'name' => 'บริการ', //7
                'slug' => 'บริการ',
                'parent_id' => 0  
            ],
            [
                'name' => 'เทคโนโลยี', //8
                'slug' => 'เทคโนโลยี',
                'parent_id' => 0  
            ],
        ]);
    }
}
