<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'trainees';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $guarded =['id'];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function Department()
	{
		return $this->belongsTo('App\Department');
	}

	public function JobStatus()
	{
		return $this->belongsTo('App\JobStatus');
	}

	public function Nationality()
	{
		return $this->belongsTo('App\Nationality');
	}

	public function Training()
	{
		return $this->belongsToMany('App\Training', 'training_trainee');
	}

	public function Lecture()
	{
		return $this->belongsToMany('App\Lecture', 'trainee_lecture')->withPivot('tIn', 'tOut');
	}
}