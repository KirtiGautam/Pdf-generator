<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class companyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'company_name'=> "Apple",
            'company_name'=> "Google",
            'company_name'=> "Microsoft",
            'company_name'=> "TCS",
            'company_name'=> "Accenture"
            ]);
    }
}
