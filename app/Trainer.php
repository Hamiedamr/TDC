<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'trainers';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['department_id', 'job_status_id', 'nationality_id', 'nameA', 'nameE', 'email', 'address', 'phone', 'nationalId', 'gender', 'otherPrograms', 'photo'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function Course()
	{
		return $this->belongsToMany('App\Course', 'trainer_course');
	}

	public function Department()
	{
		return $this->belongsTo('App\Department');
	}

	public function Lecture()
	{
		return $this->hasMany('App\Lecture');
	}
}