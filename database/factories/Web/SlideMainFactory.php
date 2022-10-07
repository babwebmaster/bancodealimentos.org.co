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
            'content_desktop'=>$this->faker->imageUrl(1920,700),
            'content_mobile'=>$this->faker->imageUrl(778,778),
            'caption_status'=>$this->faker->randomElement(['yes', 'not']),
            'content_caption'=>$this->faker->text(25),
            'btn_status'=>$this->faker->randomElement(['yes', 'not']),
            'btn_text'=>$this->faker->word,
            'btn_url'=>$this->faker->url(),
            'status'=>$this->faker->randomElement(['yes', 'not'])
        ];
    }
}
