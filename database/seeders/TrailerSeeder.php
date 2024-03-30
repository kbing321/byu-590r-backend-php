<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Trailer;

class TrailerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $trailers = [
            [
                'movie_trailer' => 'Inception',
                'trailer_url' => 'https://www.youtube.com/watch?v=YoHD9XEInc0',//inception
                'length_time' => '2:23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'movie_trailer' => 'Avatar',
                'trailer_url' => 'https://www.youtube.com/watch?v=5PSNL1qE6VY',//avatar
                'length_time' => '3:31',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'movie_trailer' => 'Revenge of the Sith',
                'trailer_url' => 'https://www.youtube.com/watch?v=qIYyXcCwvKc',
                'length_time' => '2:30',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'movie_trailer' => 'The Desolation of Smaug',
                'trailer_url' => 'https://www.youtube.com/watch?v=OPVWy1tFXuc',
                'length_time' => '2:23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'movie_trailer' => 'I Am Legend',
                'trailer_url' => 'https://www.youtube.com/watch?v=dtKMEAXyPkg',
                'length_time' => '2:42',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'movie_trailer' => 'Avatar: The Way of Water',
                'trailer_url' => 'https://www.youtube.com/watch?v=d9MyW72ELq0',
                'length_time' => '2:28',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'movie_trailer' => 'The Battle of the Five Armies',
                'trailer_url' => 'https://www.youtube.com/watch?v=iVAgTiBrrDA',
                'length_time' => '2:33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        Trailer::insert($trailers);
    }
}
