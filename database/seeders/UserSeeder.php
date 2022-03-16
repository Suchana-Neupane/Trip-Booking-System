<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users =  [
            [
              'name' => 'Super Admin',
              'email' => 'super@gmail.com',
              'password' => '123456',
            ],
            [
              'name' => 'Guide',
              'email' => 'guide123@gmail.com',
              'password' => '13456',
            ]
        ];
        
        User::insert($users);

    }
}
