<?php

namespace Database\Factories\Web;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryCifras>
 */
class CategoryCifrasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->randomNames(),
        ];
    }
    public function randomNames(){
        $rn = [0,1,2,3];
        switch ($rn) {
            case '1':
                return 'inicio';
                break;
            case '2':
                return 'sobre-nosotros';
                break;
            case '3':
                return 'corabastos';
                break;
            case '4':
                return 'prea';
                break;
            default:
                return 'inicio';
                break;
        }
    }
}
