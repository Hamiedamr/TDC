<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'lectures';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['training_id', 'trainer_id', 'date', 'hours', 'online', 'file'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function Training()
	{
		return $this->belongsTo('App\Training');
	}

	public function Trainee()
	{
		return $this->belongsToMany('App\Trainee', 'trainee_lecture')->withPivot('tIn', 'tOut');
	}

	public function Trainer()
	{
		return $this->belongsTo('App\Trainer');
	}
}