<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Result extends Model {

	//
	public function user()
	{
		$this->belongsTo('App\User');
	}

	public function scopeStudentId($query)
	{
		$query->where('student', '=', Auth::user()->identif);
	}


}
