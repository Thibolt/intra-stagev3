<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	//OneToMany Relation: a company employs many employees
	public function employees()
	{
		return $this->hasMany('App\Employee');
	}

}
