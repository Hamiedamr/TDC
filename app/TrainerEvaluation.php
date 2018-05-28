<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainerEvaluation extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'trainer_evaluations';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['trainee_id', 'trainer_id', 'training_id', 'hint'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	protected static function boot()
	{
		parent::boot();

		static::deleting(function($evaluation)
		{
			$evaluation->EvaluationPoint()->detach();
		});
	}

	public function EvaluationPoint()
	{
		return $this->belongsToMany('App\EvaluationPoint', 'trainer_point')->withPivot('value_1', 'value_2');
	}
}