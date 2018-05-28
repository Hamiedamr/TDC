<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'departments';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['college_id', 'main_type_id', 'nameA', 'nameE'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function College()
	{
		return $this->belongsTo('App\College');
	}

	public function MainType()
	{
		return $this->belongsTo('App\MainType');
	}

	public function Trainee()
	{
		return $this->hasMany('App\Trainee');
	}

	public function Trainer()
	{
		return $this->hasMany('App\Trainer');
	}
}