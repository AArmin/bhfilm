<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmMaker extends Model
{
    use HasFactory;

    public function films(){
        return $this->belongsToMany(Film::class);
    }

    public function functions(){
        return $this->belongsToMany(FilmMakerFunction::class, 'film_maker_film_maker_function');
    }
}
