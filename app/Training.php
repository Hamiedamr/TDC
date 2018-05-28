<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'trainings';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['course_category_id', 'hall_id', 'time', 'startDate', 'endDate', 'bookingStartDate', 'bookingEndDate'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	protected static function boot()
	{
		parent::boot();

		static::deleting(function($training)
		{
			foreach ($training->Lecture as $lecture)
			{
				$lecture->delete();
			}
		});
	}

	public function Course()
	{
		return $this->belongsTo('App\Course');
	}

	public function Hall()
	{
		return $this->belongsTo('App\Hall');
	}

	public function Trainee()
	{
		return $this->belongsToMany('App\Trainee', 'training_trainee');
	}

	public function Lecture()
	{
		return $this->hasMany('App\Lecture');
	}
}