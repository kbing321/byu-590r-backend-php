<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $movies = [
            [
                'trailer_id' => 1,
                'director_id' => 1,
                'title' => 'Inception',
                'description' => 'A Dream Within a Dream',
                'movie_cover_picture' => 'images/inception.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'trailer_id' => 2,
                'director_id' => 2,
                'title' => 'Avatar',
                'description' => 'The Blue Aliens',
                'movie_cover_picture' => 'images/avatar.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'trailer_id' => 6,
                'director_id' => 2,
                'title' => 'Avatar',
                'description' => 'The Way of Water',
                'movie_cover_picture' => 'images/wayofwater.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'trailer_id' => 3,
                'director_id' => 3,
                'title' => 'Star Wars',
                'description' => 'Revenge of the Sith',
                'movie_cover_picture' => 'images/revengeofthesith.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'trailer_id' => 4,
                'director_id' => 4,
                'title' => 'The Hobbit',
                'description' => 'The Desolation of Smaug',
                'movie_cover_picture' => 'images/desolationofsmaug.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'trailer_id' => 7,
                'director_id' => 4,
                'title' => 'The Hobbit',
                'description' => 'The Battle of the Five Armies',
                'movie_cover_picture' => 'images/battleoffivearmies.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'trailer_id' => 5,
                'director_id' => 5,
                'title' => 'I Am Legend',
                'description' => 'Avoid the Dark',
                'movie_cover_picture' => 'images/iamlegend.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        movie::insert($movies);
    }
}
