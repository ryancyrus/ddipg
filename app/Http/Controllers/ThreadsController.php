<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Thread;
//use Illuminate\Http\Request;
use Request;
use Auth;
use App\Http\Requests\ThreadRequest;

class ThreadsController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
		

	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$threads = Thread::latest()->participants()->get();

		return view  ('qnaforum.index', compact('threads'));
	}

	public function sent()
	{
		$threads = Thread::latest()->sent()->get();

		return view  ('qnaforum.index', compact('threads'));
	}

	public function receive()
	{
		$threads = Thread::latest()->noreply()->get();

		return view  ('qnaforum.index', compact('threads'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('qnaforum.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ThreadRequest $request)
	{
		//
		
		//return faculty's ID number with
		 // Auth::user()->identif;
		$input = Request::all();
		$input['origin'] = Auth::user()->identif;
		Thread::create($input);
		return redirect('qnaforum');
		// return($input);
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
		$thread = Thread::findorFail($id);
		$org = $thread->origin;
		$des = $thread->destination;
		if($user_relate == $org || $user_relate == $des)
		{
			
        	return view('qnaforum.show', compact('thread'));

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
		//$thread = Thread::findorFail($id);
		// if(Auth::user()->identif == $thread->destination)
		// {
		// 	$thread1 = [];
		// 	$thread1['status'] = $thread->status;
		// 	$thread1['holder'] = $thread->holder;

		// 	return view('qnaforum.edit', compact('thread1') );
		// }
		// else
		// {
		
			//return view('qnaforum.edit', compact('thread'));
		$user_relate = Auth::user()->identif;
		$thread = Thread::findorFail($id);
		$org = $thread->origin;
		$des = $thread->destination;
		if($user_relate == $org)
		{
			
        	return view('qnaforum.edit_question', compact('thread'));

		}elseif ($user_relate == $des) {
			# code...
			return view('qnaforum.edit_reply', compact('thread'));
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
	public function update($id, ThreadRequest $request)
	{
		//
		$thread = Thread::findorFail($id);

		$thread->update($request->all());

		return redirect('qnaforum');
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
