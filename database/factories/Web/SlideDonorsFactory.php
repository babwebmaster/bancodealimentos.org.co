<?php

namespace Database\Factories\Web;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\web\SlideDonors>
 */
class SlideDonorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word,
            'image'=>$this->faker->imageUrl(600,600),
            'status'=>$this->faker->randomElement(['yes', 'not'])
        ];
    }
}
