<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Director;
use Carbon\Carbon;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $directors = [
            [
                'first_name' => 'Christopher',
                'last_name' => 'Nolan',
                'birth_country' => 'United Kingdom',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'James',
                'last_name' => 'Cameron',
                'birth_country' => 'Canada',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'George',
                'last_name' => 'Lucas',
                'birth_country' => 'United States',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Peter',
                'last_name' => 'Jackson',
                'birth_country' => 'New Zealand',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Francis',
                'last_name' => 'Lawrence',
                'birth_country' => 'Austria',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
        ];
        Director::insert($directors);
    }
}
