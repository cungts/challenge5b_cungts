<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'teacher1',
            'password'=>bcrypt('123456a@A'),
            'name'=>'Teacher 1',
            'email'=>'teacher1@gmail.com',
            'phone'=>'0569447867',
            'level'=>'0'
        ]);

        DB::table('users')->insert([
            'username'=>'teacher2',
            'password'=>bcrypt('123456a@A'),
            'name'=>'Teacher 2',
            'email'=>'teacher2@gmail.com',
            'phone'=>'0967007158',
            'level'=>'0'
        ]);

        DB::table('users')->insert([
            'username'=>'student1',
            'password'=>bcrypt('123456a@A'),
            'name'=>'Student 1',
            'email'=>'student1@gmail.com',
            'phone'=>'033123456',
            'level'=>'1'
        ]);

        DB::table('users')->insert([
            'username'=>'student2',
            'password'=>bcrypt('123456a@A'),
            'name'=>'Student 2',
            'email'=>'student2@gmail.com',
            'phone'=>'033123457',
            'level'=>'1'
        ]);
    }
}
