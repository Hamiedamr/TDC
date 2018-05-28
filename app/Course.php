<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Course extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'courses';

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

	protected static function boot()
	{
		parent::boot();

		static::deleting(function($course)
		{
			File::delete($course['file']);
			$course->JobStatus()->detach();
			$course->MainType()->detach();

			foreach ($course->Training as $training)
			{
				$training->delete();
			}
		});
	}

	public function Program()
	{
		return $this->belongsTo('App\Program');
	}

	public function JobStatus()
	{
		return $this->belongsToMany('App\JobStatus', 'course_interests');
	}

	public function MainType()
	{
		return $this->belongsToMany('App\MainType', 'course_excludes');
	}

	public function Training()
	{
		return $this->hasMany('App\Training');
	}
}