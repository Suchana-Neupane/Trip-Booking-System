<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        'user_types_id ' => '1'
      ],
      [
        'name' => 'Guide',
        'email' => 'guide123@gmail.com',
        'password' => '13456',
        'user_types_id ' => '2'
      ]
    ];
    User::insert($users);
  }
}