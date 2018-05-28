<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'universities';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nameA', 'nameE', 'address'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	protected static function boot()
	{
		parent::boot();

		static::deleting(function($university)
		{
			foreach ($university->College as $college)
			{
				$college->delete();
			}
		});
	}

	public function College()
	{
		return $this->hasMany('App\College');
	}
}