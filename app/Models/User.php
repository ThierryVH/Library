<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

		protected $fillable = ['last_name', 'first_name', 'identifiant', 'nb_book'];

		public static function getUniqueIdentifiant(){
			$identifiant = str_random('8'); // On attribue une string aléatoire de 5 caractères

      // Si on trouve déjà une entrée dans la table avec l'identifiant qui vient d'être généré
      if(static::whereIdentifiant($identifiant)->count() != 0){
        // On rappelle la fonction pour générer une nouvelle chaîne
        return static::getUniqueIdentifiant();
      }

      return $identifiant;
		}
}
