<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

	protected $fillable = [
		'nom',
		'ville',
		'pays',
		'max_joueurs',
	]; // model_anchor

	protected $table = "equipes";

	public function joueur()
	{
		return $this->hasMany(Joueur::class);
	}
}
