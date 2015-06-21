<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Notesheet extends Model {

	//
	protected $fillable = ['notesheet_id', 'subject', 'origin', 'destination', 'status', 'holder'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function scopeParticipants($query)
	{
		$query->where('origin', '=', Auth::user()->identif)
				->orWhere('destination', '=', Auth::user()->identif);
	}

	public function scopeSent($query)
	{
		$query->where('origin', '=', Auth::user()->identif);
	}

	public function scopeReceive($query)
	{
		$query->where('destination', '=', Auth::user()->identif);
	}

}
