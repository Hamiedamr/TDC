<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'programs';

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

	protected static function boot()
	{
		parent::boot();

		static::deleting(function($program)
		{
			foreach ($program->Course as $course)
			{
				$course->delete();
			}
		});
	}

	public function Course()
	{
		return $this->hasMany('App\Course');
	}
}