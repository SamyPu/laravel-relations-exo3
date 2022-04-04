<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("roles")->insert([
			'nom' => 'Avant',
			'maximum' => 3,
		]);
        DB::table("roles")->insert([
			'nom' => 'Central',
			'maximum' => 3,
		]);
        DB::table("roles")->insert([
			'nom' => 'Arrière',
			'maximum' => 3,
		]);
        DB::table("roles")->insert([
			'nom' => 'Remplaçant',
			'maximum' => 5,
		]);
    }
}
