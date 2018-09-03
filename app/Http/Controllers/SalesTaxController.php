<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SalesTax;

class SalesTaxController extends Controller
{
    public function getSalesTax($state, $zipcode){
    	$info = SalesTax::where('state', $state)->where('zipcode', $zipcode)->first();
    	
    	return response()
    			->json($info);
    }
}
