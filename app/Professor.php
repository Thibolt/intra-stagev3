<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model {

	//Polymorphic relation: Professor is one kind of User
	public function users()
	{
		return $this->morphMany('App\User', 'usable');
	}
	//OneToMany Relation: a professor follows many trainings	
	public function trainings()
	{
		return $this->hasMany('App\Training');
	}
}
