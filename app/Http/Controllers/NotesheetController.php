<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Notesheet;
//use Illuminate\Http\Request;
use Request;
use Auth;
use App\Http\Requests\ArticleRequest;

class NotesheetController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('faculty');

	}




	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$notesheets = Notesheet::latest()->participants()->get();

		return view  ('nstrack.index', compact('notesheets'));
	}

	public function sent()
	{
		$notesheets = Notesheet::latest()->sent()->get();

		return view  ('nstrack.index', compact('notesheets'));
	}

	public function receive()
	{
		$notesheets = Notesheet::latest()->receive()->get();

		return view  ('nstrack.index', compact('notesheets'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('nstrack.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleRequest $request)
	{
		//
		
		//return faculty's ID number with
		 // Auth::user()->identif;
		$input = Request::all();
		$input['origin'] = Auth::user()->identif;
		Notesheet::create($input);
		return redirect('nstrack');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$user_relate = Auth::user()->identif;
		$notesheet = Notesheet::findorFail($id);
		$org = $notesheet->origin;
		$des = $notesheet->destination;
		if($user_relate == $org || $user_relate == $des)
		{
			
        	return view('nstrack.show', compact('notesheet'));

		}
		else{
			return response('Unauthorized Access', 401);
		}
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		//$notesheet = Notesheet::findorFail($id);
		// if(Auth::user()->identif == $notesheet->destination)
		// {
		// 	$notesheet1 = [];
		// 	$notesheet1['status'] = $notesheet->status;
		// 	$notesheet1['holder'] = $notesheet->holder;

		// 	return view('nstrack.edit', compact('notesheet1') );
		// }
		// else
		// {
		
			//return view('nstrack.edit', compact('notesheet'));
		$user_relate = Auth::user()->identif;
		$notesheet = Notesheet::findorFail($id);
		$org = $notesheet->origin;
		$des = $notesheet->destination;
		if($user_relate == $org || $user_relate == $des)
		{
			
        	return view('nstrack.edit', compact('notesheet'));

		}
		else{
			return response('Unauthorized Access', 401);
		}
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ArticleRequest $request)
	{
		//
		$notesheet = Notesheet::findorFail($id);

		$notesheet->update($request->all());

		return redirect('nstrack');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
