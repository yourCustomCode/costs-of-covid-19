<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RealRev extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('real_rev', function (Blueprint $table) {
          $table->id();
          $table->integer('userid');
          $table->float('amount');
          $table->date('start_date');
          $table->date('end_date');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_rev');
    }
}
