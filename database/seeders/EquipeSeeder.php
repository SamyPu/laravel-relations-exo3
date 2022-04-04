<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("equipes")->insert([
			'nom' => 'Equipe 1',
			'ville' => 'Mexico',
			'pays' => 'Mexique',
			'max_joueurs' => rand(10,14),
		]);
        DB::table("equipes")->insert([
			'nom' => 'Equipe 2',
			'ville' => 'Bruxelles',
			'pays' => 'Belgique',
			'max_joueurs' => rand(10,14),
		]);
        DB::table("equipes")->insert([
			'nom' => 'Equipe 3',
			'ville' => 'Rome',
			'pays' => 'Italie',
			'max_joueurs' => rand(10,14),
		]);
        DB::table("equipes")->insert([
			'nom' => 'Equipe 4',
			'ville' => 'Plop',
			'pays' => 'Pérou',
			'max_joueurs' => rand(10,14),
		]);
        DB::table("equipes")->insert([
			'nom' => 'Equipe 5',
			'ville' => 'Moscou',
			'pays' => 'Russie',
			'max_joueurs' => rand(10,14),
		]);
		// DB::table("equipes")->insert([
		// 	'nom' => 'Sans equipe',
		// 	'ville' => '-',
		// 	'pays' => '-',
		// 	'max_joueurs' => 100,
		// ]);
    }
}
