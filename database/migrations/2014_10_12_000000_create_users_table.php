<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            $table->increments('id');
            $table->string('name',128);
            $table->string('email',254)->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password',255);
            $table->string('age',10);
            $table->integer('birthday');
            $table->rememberToken();
            //$table->timestamps();
            $table->dateTime('created_at')->useCurrent(); 
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->collation = 'utf8mb4_bin';
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
