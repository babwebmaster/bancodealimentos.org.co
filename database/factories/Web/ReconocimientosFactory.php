<?php

namespace Database\Factories\Web;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\web\Reconocimientos>
 */
class ReconocimientosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'content' => $this->faker->text(25),
            'image' => $this->faker->url(),
            'icon' => 'trophy',
            'color' => '011b47',
            'fecha_anuncio' => $this->faker->date()
        ];
    }
}
