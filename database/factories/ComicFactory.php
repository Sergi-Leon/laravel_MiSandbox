<?php

namespace Database\Factories;
use App\Models\Comic;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this -> faker -> sentence(),
            'coleccion' => $this -> faker -> sentence(),
            'genero' => $this -> faker -> randomElement(['Superheroe', 'Ciencia ficcion', 'Aventura'])
        ];
    }
}
