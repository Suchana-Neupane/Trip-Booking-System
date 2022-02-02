<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User_type;
class User_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User_type::truncate();

        $user_types =  [
            [
              'id' => '1',
              'name' => 'Super Admin',
            ],
            [
              'id' => '2',
              'name' => 'Guide',
              
            ]
        ];
        User_type::insert($user_types);
    }
}
