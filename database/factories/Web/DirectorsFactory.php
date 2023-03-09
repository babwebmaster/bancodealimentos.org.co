<?php

namespace Database\Factories\Web;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\web\Directors>
 */
class DirectorsFactory extends Factory
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
            'name' => $this->faker->name,
            'description' => $this->faker->realText(180),
            'image' => $this->faker->imageUrl(778,778)            
        ];
    }
}
