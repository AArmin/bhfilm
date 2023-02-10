<?php

namespace Database\Seeders;

use App\Models\FilmMakerFunction;
use Illuminate\Database\Seeder;

class FilmMakerFunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filmmakerFunctions = [
            'Scenarista', 'Reditelj', 'Direktor fotografije', 'Montažer'
        ];

        foreach ($filmmakerFunctions as $key => $value) {
            FilmMakerFunction::firstOrCreate([
                'name' => $value
            ]);
        }
    }
}
