<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\BackendController;

class BackendController_Home extends BackendController
{
	public function index()
	{   
        $data["default"]="";
        View::share(array(
        		"page"=>"EVERY JUAN Travels Co."
        	));
        return View::make('backend.home', $data);
	}
}