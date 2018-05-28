<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraineeEvaluation extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'trainee_evaluations';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['trainee_id', 'trainer_id', 'training_id', 'gain', 'comment', 'improvement', 'apply'];

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
		return $this->belongsToMany('App\EvaluationPoint', 'trainee_point')->withPivot('value_1', 'value_2');
	}
}