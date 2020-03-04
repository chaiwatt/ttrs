<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(IndustrygroupsTableSeeder::class);
        $this->call(RegisteredCapitalTypesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(EducationBranchTableSeeder::class);
        $this->call(EducationLevelTableSeeder::class);
        $this->call(BusinessTypesTableSeeder::class);
        $this->call(ExpertsTableSeeder::class);
        $this->call(GeneralInfosTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(PageStatusTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(BusinessPlanStatusesTableSeeder::class);
    }
}
