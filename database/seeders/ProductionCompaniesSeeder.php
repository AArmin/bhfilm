<?php

namespace Database\Seeders;

use App\Models\ProductionCompany;
use Illuminate\Database\Seeder;

class ProductionCompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productionCompanies = [
            [
                'name' => 'Paramount Pictures',
                'info' => 'Paramount Pictures Corporation is an American film studio based in Hollywood, California. It is a subsidiary of ViacomCBS and is one of the "Big Six" major American film studios. Paramount Pictures is a member of the Motion Picture Association (MPA). The studio is a major producer and distributor of filmed entertainment from films, television series, and digital streaming.',
                'hq_location' => ProductionCompany::$_HQ_LOCATION_FOREIGN,
            ],
            [
                'name' => 'Universal Pictures',
                'info' => 'Universal Pictures is an American film studio owned by Comcast through the Universal Filmed Entertainment Group division of its wholly owned subsidiary NBCUniversal. It is one of the "Big Six" major American film studios. Universal Pictures is a member of the Motion Picture Association (MPA). The studio has been a leading company in the creation, production, distribution, and marketing of motion pictures for nearly a century.',
                'hq_location' => ProductionCompany::$_HQ_LOCATION_FOREIGN,
            ],
            [
                'name' => 'Lokalci',
                'info' => 'Domaća filmska produkcija.',
                'hq_location' => ProductionCompany::$_HQ_LOCATION_DOMESTIC,
            ]
        ];

        foreach ($productionCompanies as $productionCompany) {
            ProductionCompany::firstOrCreate($productionCompany);
        }
    }
}
