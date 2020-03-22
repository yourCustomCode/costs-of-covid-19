<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 0; $i<50;$i++){
        DB::table('granted_cred')->insert([
            'userid' => rand(1,5),
            'amount' => rand(10000,50000),
            'date_granted' => "2020-01-01"
        ]);
      }
    }
}
