<?php

namespace Database\Seeders;

use App\Models\FilmCategory;
use Illuminate\Database\Seeder;

class FilmCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Igrani', 'Dokumentarni', 'Animirani'
        ];

        foreach ($categories as $key => $value) {
            FilmCategory::firstOrCreate([
                'name' => $value
            ]);
        }
    }
}
