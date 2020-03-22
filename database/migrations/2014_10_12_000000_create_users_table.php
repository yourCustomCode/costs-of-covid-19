<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('industry')->nullable();
            $table->string('street')->nullable();
            $table->Integer('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->Integer('tax_id')->nullable();
            $table->string('vat_id')->nullable();
            $table->string('reg_id')->nullable();
            $table->string('iban')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
