<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LastRevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 0; $i<50;$i++){
        DB::table('last_rev')->insert([
            'userid' => rand(1,5),
            'amount' => rand(2000,150000),
            'year' => "2019",
            'doc_id' => rand(1,100)
        ]);
      }
    }
}
