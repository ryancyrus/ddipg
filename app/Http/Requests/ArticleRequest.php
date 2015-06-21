<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
			'notesheet_id' => 'required',
			'subject' => 'required',
			'origin' => 'required',
			'destination' => 'required' ,
			'status' => 'required',
			'holder' => 'required',
		];
	}

}
