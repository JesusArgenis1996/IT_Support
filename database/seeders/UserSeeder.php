<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Jesus',
            'last_name'=> 'Sanchez',
            'number' => '123545',
            'job' => 'IT Support',
            'email' => 'admin'.'@admin',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Eddy',
            'last_name'=> 'Kastle',
            'number' => '123545',
            'job' => 'Maintenance',
            'email' => 'user'.'@user',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Pedro',
            'last_name'=> 'Kastle',
            'number' => '123545',
            'job' => 'Maintenance',
            'email' => 'user2'.'@user2',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'ADS',
            'last_name'=> 'Kastle',
            'number' => '123545',
            'job' => 'Maintenance',
            'email' => 'user3'.'@user3',
            'password' => Hash::make('12345678'),
        ]);
    }
}
