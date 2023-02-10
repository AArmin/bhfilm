<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmMakerFunction extends Model
{
    use HasFactory;

    public function filmMakers(){
        return $this->belongsToMany(FilmMaker::class, 'film_maker_film_maker_function');
    }
}
