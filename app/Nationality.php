<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'nationalities';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nameA', 'nameE'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function Trainee()
	{
		return $this->hasMany('App\Trainee');
	}
}