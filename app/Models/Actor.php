<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;

    public function movie(): BelongsToMany {
        return $this->belongsToMany(Movie::class, 'actor_movies', 'movie_id', 'actor_id');
    }
}
