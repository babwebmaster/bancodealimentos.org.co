<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\web\Cifras;
use App\Models\web\CifrasCategoryCifra;
use App\Models\web\Directors;
use App\Models\web\Reconocimientos;
use App\Models\web\SlideMain;
use App\Models\web\SlideDonors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        SlideMain::factory(3)->create();
        SlideDonors::factory(30)->create();
        $this->call([CategoryCifrasSeeder::class]);
        Cifras::factory(9)->create();
        CifrasCategoryCifra::factory(10)->create();
        Reconocimientos::factory(10)->create();
        Directors::factory(9)->create();
    }
}
