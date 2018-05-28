<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluationPoint extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'evaluation_points';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'type', 'displayOrder'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function TraineeEvaluation()
	{
		return $this->belongsToMany('App\TraineeEvaluation', 'trainee_point')->withPivot('value_1', 'value_2');
	}

	public function TrainerEvaluation()
	{
		return $this->belongsToMany('App\TrainerEvaluation', 'trainer_point')->withPivot('value_1', 'value_2');
	}
}