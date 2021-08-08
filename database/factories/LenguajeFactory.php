<?php

namespace Database\Factories;

use App\Models\Lenguaje;
use Illuminate\Database\Eloquent\Factories\Factory;

class LenguajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lenguaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement(['Desarrollo web', 'plataformas'])
        ];
    }
}
