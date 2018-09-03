<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogResult;
use DB;
use Carbon;

class LogResultController extends Controller
{
    public function setLog () {
    	$log = new logResult();
    	$log->save();

    	return response(200);
    }

    public function getLogCount () {
    	// $count = LogResult::where(DB::raw('date(created_at)'), date('Y-m-d'))->get()->count();
    	$count = LogResult::all()->count();

    	return response()
    			->json([
    				'count' => $count
    			]);
    }
}
