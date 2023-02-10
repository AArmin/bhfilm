<?php

namespace Database\Seeders;

use App\Models\FilmLength;
use Illuminate\Database\Seeder;

class FilmLengthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lengths = ['Dugometražni', 'Kratkometražni'];

        foreach ($lengths as $key => $value) {
            FilmLength::firstOrCreate([
                'name' => $value
            ]);
        }
    }
}
