<?php

namespace Database\Factories\Web;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\web\Cifras>
 */
class CifrasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'value' => $this->faker->numberBetween(600,30000000),
            'icon' => $this->faker->imageUrl(600,600),
            'published' => $this->faker->randomElement(['yes', 'not'])
        ];
    }
}
