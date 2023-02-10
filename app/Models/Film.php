<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(FilmCategory::class, 'film_category_id');
    }

    public function length(){
        return $this->belongsTo(FilmLength::class, 'film_length_id');
    }

    public function filmMakers(){
        return $this->belongsToMany(FilmMaker::class, 'film_film_maker');
    }
}
