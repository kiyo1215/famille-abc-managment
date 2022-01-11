<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'キャストA',
            'work_start_time' => '10:00:00',
            'work_end_time' => '20:00:00',
            'lest_start_time' => '15:00:00',
            'lest_end_time' => '16:00:00',
            'drink' => '5',
            'cheki' => '5',
            'email' => 'test-a@test.com',
            'password' => Hash::make('test1234')
        ];
        DB::table('users')->insert($param);
        
        $param = [
            'name' => 'キャストB',
            'work_start_time' => '10:00:00',
            'work_end_time' => '20:00:00',
            'lest_start_time' => '15:00:00',
            'lest_end_time' => '16:00:00',
            'drink' => '5',
            'cheki' => '5',
            'email' => 'test-b@test.com',
            'password' => Hash::make('test5678')
        ];
        DB::table('users')->insert($param);
        
        $param = [
            'name' => 'キャストC',
            'work_start_time' => '10:00:00',
            'work_end_time' => '20:00:00',
            'lest_start_time' => '15:00:00',
            'lest_end_time' => '16:00:00',
            'drink' => '5',
            'cheki' => '5',
            'email' => 'test-c@test.com',
            'password' => Hash::make('test9012')
        ];
        DB::table('users')->insert($param);
        
    }
}
