<?php

namespace Database\Factories\Web;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\web\CifrasCategoryCifra>
 */
class CifrasCategoryCifraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cifras_id' => rand(1,9),
            'category_cifras_id' => rand(1,4)
        ];
    }
}
