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


class FrontController extends Controller
{
  public function home()
  {
    $data['page'] = "HOME";
    return view('front.home',$data);
  }
  public function login()
  {
    $data['page'] = "LOGIN";
    return view('front.login',$data);
  }
  public function about()
  {
    $data['page'] = "ABOUT US";
    return view('front.about',$data);
  }
  public function alumni_story()
  {
    $data['page'] = "ALUMNI STORY";
    return view('front.alumni_story',$data);
  }
  public function program()
  {
    $data['page'] = "PROGRAM & EVENT";
    return view('front.program',$data);
  }
  public function aboutsss()
  {
    $data['page'] = "about";
    return view('front.login',$data);
  }

  
}
