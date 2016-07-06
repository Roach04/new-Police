<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chase extends Model
{
    protected $table = "cases";

    protected $fillable = ['user_id', 'firstname', 'lastname', 'idNumber', 'case', 'station'];

    //relationships
    public function getUser(){

    	return $this->belongsTo('App\User');
    }
}
