<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
	public function store(Request $request){
		$this->validate($request, [
			'name' => 'required',
	        'email' => 'required'
    	]);

		$feedback = new Feedback();

		$feedback->name = $request->name;
		$feedback->email = $request->email;
		$feedback->comment = $request->comment;
		$feedback->save();

		return response(200);
	}   
}
