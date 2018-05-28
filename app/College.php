<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'colleges';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['university_id', 'main_type_id', 'nameA', 'nameE', 'type'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	protected static function boot()
	{
		parent::boot();

		static::deleting(function($college)
		{
			$college->Department()->delete();
		});
	}

	public function University()
	{
		return $this->belongsTo('App\University');
	}

	public function Department()
	{
		return $this->hasMany('App\Department');
	}

	public function MainType()
	{
		return $this->belongsTo('App\MainType');
	}
}