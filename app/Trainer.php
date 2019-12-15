<?php

namespace Laradex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

	protected $fillable = ['name','description','slug','avatar'];
	/**
 * Get the route key for the model.
 *
 * @return string
 */
	public function getRouteKeyName()
	{
	    return 'slug';
	}

	public function pokemons()
	    {
	        return $this->hasMany('Laradex\Pokemon');
	    }
}
