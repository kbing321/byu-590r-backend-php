<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_trailer',
        'trailer_url',
        'length_time',
        'created_at',
        'updated_at'
    ];
}
