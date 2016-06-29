<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Case extends Model {

	//table
	protected $table = 'cases';

	//fillables.
	protected $fillable = ['names', 'idNumber', 'case', 'station'];
}
