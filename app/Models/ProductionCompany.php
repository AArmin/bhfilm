<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionCompany extends Model
{
    use HasFactory;

    public static $_HQ_LOCATION_DOMESTIC = 'domestic';
    public static $_HQ_LOCATION_FOREIGN = 'foreign';
}
