<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Http\Request;

class loginController extends BaseController
{
   public function login (Request $req){

    $username = $req->input('uname');
    $password = $req->input('psw');

    $check = DB::table('admin_accounts')->where(['username'=>$username,'password'=>$password])->get();

    if($check){
       return view('pages.adhome');
    }else{
       echo "<script type='text/javascript'>alert('Invalid Username or Password!')</script>";
        return redirect()->route('incorrect');
    }
   }
}

?>