<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobStatus extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'job_statuses';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nameA', 'nameE', 'courseFees', 'statusOrder'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function Course()
	{
		return $this->belongsToMany('App\Course', 'course_interests');
	}

	public function Trainee()
	{
		return $this->hasMany('App\Trainee');
	}
}