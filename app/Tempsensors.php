<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempsensors extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tempsensors';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'user_id'];

	public function temps()
    {
        return $this->hasMany('App\temps');
    }
}
