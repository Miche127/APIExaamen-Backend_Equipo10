<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombres = $this->faker->firstName();
        $apellidoP = $this->faker->lastName();
        $apellidoM = $this->faker->lastName();
        return [
            'nombres' => $nombres,
            'apellidoP' => $apellidoP,
            'apellidoM' => $apellidoM,
            'id_departamento'=> $this->faker->numberBetween(1, 11), 
            'correo' => strtolower("$nombres.$apellidoP@gmail.com"),
            'contrasena'=>$this->faker->password(($minLength = 6),($maxLength = 15)),
        ];
    }
}
