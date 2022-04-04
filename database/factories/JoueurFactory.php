<?php

namespace Database\Factories;

use App\Models\Equipe;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joueur>
 */
class JoueurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['Homme', 'Femme','Non-Binaire']);
        $min = 18;
        $max = 28;

        static $equipe_id = 1;
        static $role_id = 1;
        static $role_joueur = 0;
        static $nombre_joueurs = 0;
        $equipe_id_max = Equipe::all();
        $equipe_id_max = $equipe_id_max[$equipe_id - 1]->max_joueurs;

        if ($nombre_joueurs < $equipe_id_max ) {
            if ($role_joueur < 3 && $role_id != 4) {
                $role_joueur++;
            } else if ($role_id == 4) {
                $role_joueur++;
            } else {
                $role_id++;
                $role_joueur = 1;
            }
            $nombre_joueurs++;
        } else {
            $nombre_joueurs = 1;
            $role_joueur = 1;
            $role_id = 1;
            $equipe_id++;
        }

        return [
            'nom' => $this->faker->lastName(),
			'prenom' => $this->faker->firstName(),
			'age' => $this->faker->numberBetween($min, $max),
			'telephone' => $this->faker->e164PhoneNumber(),
			'email' => $this->faker->safeEmail(),
			'genre' => $gender,
			'pays' => $this->faker->country(),
			'photo_id' => $this->faker->numberBetween(1, count(Photo::all())),
			// 'equipe_id' => $this->faker->numberBetween(1, count(Equipe::all())),
			// 'role_id' => $this->faker->numberBetween(1, count(Role::all())),
			'role_id' => $role_id,
			'equipe_id' => $equipe_id,
        ];
    }
}
