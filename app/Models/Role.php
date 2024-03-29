<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

	protected $fillable = [
		'nom',
	]; // model_anchor

	protected $table = "roles";

	public function joueurs()
	{
		return $this->hasMany(Joueur::class);
	}
}
