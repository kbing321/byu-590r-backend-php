<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actor;
use Carbon\Carbon;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $actors = [
            [
                'first_name' => 'Leonardo',
                'last_name' => 'DiCaprio',
                'birth_country' => 'United States',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Cillian',
                'last_name' => 'Murphy',
                'birth_country' => 'Ireland',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Joseph',
                'last_name' => 'Gordon-Levitt',
                'birth_country' => 'United States',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Tom',
                'last_name' => 'Hardy',
                'birth_country' => 'United Kingdom',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Sam',
                'last_name' => 'Worthington',
                'birth_country' => 'United Kingdom',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Zoe',
                'last_name' => 'Saldana',
                'birth_country' => 'United States',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Stephen',
                'last_name' => 'Lang',
                'birth_country' => 'United States',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Hayden',
                'last_name' => 'Christensen',
                'birth_country' => 'Canada',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Ewan',
                'last_name' => 'McGregor',
                'birth_country' => 'United Kingdom',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Natalie',
                'last_name' => 'Portman',
                'birth_country' => 'Israel',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Christopher',
                'last_name' => 'Lee',
                'birth_country' => 'United Kingdom',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Martin',
                'last_name' => 'Freeman',
                'birth_country' => 'United Kingdom',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Luke',
                'last_name' => 'Evans',
                'birth_country' => 'United Kingdom',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Ian',
                'last_name' => 'McKellen',
                'birth_country' => 'United Kingdom',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Will',
                'last_name' => 'Smith',
                'birth_country' => 'United States',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Alice',
                'last_name' => 'Braga',
                'birth_country' => 'Brazil',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
        ];
        Actor::insert($actors);
    }
}
