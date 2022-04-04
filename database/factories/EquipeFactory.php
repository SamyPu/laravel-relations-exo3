<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipe>
 */
class EquipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->randomElement(['Coucou', 'Plop','Non-Binaire','Machin-Gun','Vive Nico','Coach','ULTRAPLOP']);
        return [
            'nom' => $name,
			'ville' => $this->faker->city(),
			'pays' => $this->faker->country(),
			'max_joueurs' => $this->faker->numberBetween(10, 14),
        ];
    }
}
