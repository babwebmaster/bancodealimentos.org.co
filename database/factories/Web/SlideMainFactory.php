<?php

namespace Database\Factories\Web;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\web\SlideMain>
 */
class SlideMainFactory extends Factory
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
            'content'=>$this->faker->imageUrl(1920,700),
            'status'=>rand(0,1)
        ];
    }
}
