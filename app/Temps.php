<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Temps extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'temp';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'temp_id', 'temp'];

}
