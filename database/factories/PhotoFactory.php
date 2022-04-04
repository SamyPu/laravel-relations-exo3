<?php

namespace Database\Factories;

use App\Models\Joueur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $i = 0;
        $i++;
        return [
            'photo_joueur' => $this->faker->imageUrl(120, 100, 'cats'),
			'joueur_id' => $i,
        ];
    }
}
