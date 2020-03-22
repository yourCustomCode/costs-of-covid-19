<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ExpRevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 0; $i<50;$i++){

        DB::table('exp_rev')->insert([
            'userid' => rand(1,5),
            'amount' => rand(2000,150000),
            'start_date' => "2020-01-01",
            'end_date' => "2020-01-01"
        ]);
      }
    }
}
