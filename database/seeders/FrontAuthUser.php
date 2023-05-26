<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FrontAuthUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'テストユーザー',
            'email'=>'hoge@example.com',
            'email_verified_at'=>date('Y_m_d H:i:s'),
            'password'=>Hash::make('pass'),
            'age'=>date('Y_m_d'),
            'birthday'=>date('Y_m_d'),
            'age'=>date('Y_m_d'),
            ]);
    }
}
