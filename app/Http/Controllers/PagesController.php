<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('pages.home');
	}

	public function about()
	{
		return view('pages.about1');
	}

	public function bos()
	{
		return view('pages.bos');
	}

	public function admsn()
	{
		return view('pages.admissions');
	}

	public function vcm()
	{
		return view('pages.vcmessage');
	}

	public function contact()
	{
		return view('pages.contact');
	}

	public function academics()
	{
		return view('pages.academics');
	}

	public function campus()
	{
		return view('pages.campus');
	}

	public function administration()
	{
		return view('pages.administration');
	}

	public function stures()
	{
		return view('pages.stures1');
	}

	public function resumemakr(){
		return view('crtest.rsm');
	}


}
