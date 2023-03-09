<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Ahmed Thabet',
            'email' => 'Ah@Ah.com',
            'password' => Hash::make('password'),
            'type' => 0,
        ]);
        DB::table('users')->insert([
            'name'=>'Mohammed Thabet',
            'email'=>'mo@mo.com',
            'password'=>Hash::make('password'),
            'type'=>1,
        ]);
        DB::table('users')->insert([
            'name'=>'Aziz Thabet',
            'email'=>'Az@Az.com',
            'password'=>Hash::make('password'),
            'type'=>1,
        ]);
    }
}
