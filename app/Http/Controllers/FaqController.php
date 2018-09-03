<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class FaqController extends Controller
{
    public function index() {
		$faq = Faq::select('slug', 'title')->get();

		return response()
				->json($faq);
    }

    public function show($slug) {
    	$faq = Faq::where('slug', $slug)->first();

    	return response()
    			->json($faq);
    }
}
