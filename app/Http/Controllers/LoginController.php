<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InActiveAuthController;
use App\Http\Model\TblUserModel;
use Redirect;
use Session;
use Crypt;
use Mail;


class LoginController extends Controller
{
  public static function allow_logged_out_users_only()
  {
    if(session("active"))
    {
      return Redirect::to("/dashboard")->send();
    }
  }
  public function user_login()
  {
    Self::allow_logged_out_users_only();
  	$data['page'] = 'Login Page';
  	return view('layout.front_user_layout',$data);
  }
  
}
