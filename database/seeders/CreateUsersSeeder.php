<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

// namespace Database\Seeders;
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@houselinkup.com',
               'type'=>1,
               'password'=> bcrypt('blockchain'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'manager@houselinkup.com',
               'type'=> 2,
               'password'=> bcrypt('blockchain'),
            ],
            [
               'name'=>'User',
               'email'=>'user@houselinkup.com',
               'type'=>0,
               'password'=> bcrypt('blockchain'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }


    // public function run()
    // {
    //     // DB::table('users')->insert([
    //     //     'name' => Str::random(10),
    //     //     'email' => Str::random(10).'@gmail.com',
    //     //     'password' => Hash::make('password'),
    //     // ]);

    //     DB::table('users')->insert([
    //         'name'=>'Manager User',
    //         'email'=>'manager@houselinkup.com',
    //         'type'=> 2,
    //         'password'=> bcrypt('blockchain'),
    //     ]);

    //     DB::table('users')->insert([
    //         'name'=>'Manager User',
    //         'email'=>'manager@houselinkup.com',
    //         'type'=> 2,
    //         'password'=> bcrypt('blockchain'),
    //     ]);

    //     DB::table('users')->insert([
    //         'name'=>'User',
    //         'email'=>'user@houselinkup.com',
    //         'type'=>0,
    //         'password'=> bcrypt('blockchain'),
    //     ]);
    // }
}
