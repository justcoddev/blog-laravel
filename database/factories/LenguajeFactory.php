<?php

namespace Database\Factories;

use App\Models\Lenguaje;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        //indicarle que genere un nombre y l ovuelva minuscula 
        //y los espaciados los reemplace con ese guión '-'
        $name=$this->faker->sentence();
        return [
            'name'=>$name,
            'slug'=> Str::slug($name,'-'),
            'descripcion'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement(['Desarrollo web', 'plataformas'])
        ];
    }
}
