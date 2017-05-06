<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\FrontendController;

class FrontendController_Home extends FrontendController
{
	public function index()
	{   
        
        $data["default"]=("");
        View::share(array(
        		"page"=>"EVERY JUAN Travels Co."
        	));
        return View::make('pages.home', $data);
	}
}