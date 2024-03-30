<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'movie_cover_picture',
        'created_at',
        'updated_at'
    ];

    public function trailer(): HasOne {
        return $this->hasOne(Trailer::class, 'id', 'trailer_id');
    }

    public function director(): BelongsTo {
        return $this->belongsTo(Director::class);
    }

    public function actor(): BelongsToMany {
        return $this->belongsToMany(Actor::class, 'actor_movies', 'movie_id', 'actor_id');
    }
    
}
