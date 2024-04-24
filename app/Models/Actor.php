<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'birth_country',
        'created_at',
        'updated_at'
    ];

    public function movie(): BelongsToMany {
        return $this->belongsToMany(Movie::class, 'actor_movies', 'movie_id', 'actor_id');
    }
}
