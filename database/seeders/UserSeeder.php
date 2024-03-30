<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds
     * @return void
    */

    public function run()
    {
        $users = [
            [
                'name' => 'Kohlton Bingham',
                'email' => 'kbing@gmail.com',
                'avatar' => null,
                'email_verified_at' => null,
                'password' => bcrypt('C2shhkog'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'John Christiansen',
                'email' => 'john@gmail.com',
                'avatar' => null,
                'email_verified_at' => null,
                'password' => bcrypt('profc590rpassword'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        User::insert($users);
    }

     
}