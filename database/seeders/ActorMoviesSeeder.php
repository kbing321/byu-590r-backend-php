<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\ActorMovie;
use App\Models\movie;

class ActorMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $actormovies=[
            [
                'actor_id' => 1,
                'movie_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 2,
                'movie_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 3,
                'movie_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 4,
                'movie_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 5,
                'movie_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 6,
                'movie_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 7,
                'movie_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 5,
                'movie_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 6,
                'movie_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 7,
                'movie_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 8,
                'movie_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 9,
                'movie_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 10,
                'movie_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 11,
                'movie_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 12,
                'movie_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 13,
                'movie_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 14,
                'movie_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 11,
                'movie_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 12,
                'movie_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 13,
                'movie_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 14,
                'movie_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 15,
                'movie_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'actor_id' => 16,
                'movie_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        ActorMovie::insert($actormovies);
    }
}
