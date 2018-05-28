<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainType extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'main_types';

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

	public function College()
	{
		return $this->hasMany('App\College');
	}

	public function Department()
	{
		return $this->hasMany('App\Department');
	}

	public function Course()
	{
		return $this->belongsToMany('App\Course', 'course_excludes');
	}
}