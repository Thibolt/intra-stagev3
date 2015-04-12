<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

	//Polymorphic relation: Student is one kind of User
	public function users()
	{
		return $this->morphMany('App\User', 'usable');
	}
	//OneToMany Relation: a student follows at least two trainings
	public function trainings()
	{
		return $this->hasMany('App\Training');
	}
}
