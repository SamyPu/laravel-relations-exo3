<?php

namespace Database\Seeders;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
		$this->call([
			// JoueurSeeder::class,
			RoleSeeder::class,
			EquipeSeeder::class,
		]);
        Photo::factory(20)->create();
        Joueur::factory(50)->create();
    }
}
