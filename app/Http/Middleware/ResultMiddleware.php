<?php namespace App\Http\Middleware;

use Closure;
use Auth;

class ResultMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$type = Auth::user()->type;

		if($type == 'Student')
		{
			return $next($request);

		}
		else
		{
			return view('errors.401');

		}
	}

}
