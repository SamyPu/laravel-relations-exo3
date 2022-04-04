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
        Joueur::factory(56)->create();
        Photo::factory(56)->create();
        // Photo se crer en même temps que le joueurs pas separer voir exo 2 
    }
}
