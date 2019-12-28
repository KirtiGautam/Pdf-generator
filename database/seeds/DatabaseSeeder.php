<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'company_name' => "Apple"
        ]);
        DB::table('companies')->insert([
            'company_name' => "Microsoft"
        ]);
        DB::table('companies')->insert([
            'company_name' => "Google"
        ]);
        DB::table('companies')->insert([
            'company_name' => "Samsung"
        ]);
        DB::table('companies')->insert([
            'company_name' => "TCS"
        ]);
        DB::table('companies')->insert([
            'company_name' => "Accenture"
        ]);
        DB::table('users')->insert([
            'username' => 'gautamkirti8c@gmail.com',
            'Pass' => password_hash('kirti', PASSWORD_BCRYPT)
        ]);
    }
}
