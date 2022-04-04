<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;

	protected $fillable = [
		'nom',
		'prenom',
		'age',
		'telephone',
		'email',
		'genre',
		'pays',
		'role_id',
		'photo_id',
		'equipe_id',
	]; // model_anchor

	protected $table = "joueurs";

	public function role()
	{
		return $this->belongsTo(Role::class);
	}
	public function photo()
	{
		return $this->belongsTo(Photo::class);
	}
	public function equipe()
	{
		return $this->belongsTo(Equipe::class);
	}
}
