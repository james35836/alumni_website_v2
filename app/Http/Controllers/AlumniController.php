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


class AlumniController extends Controller
{
  public function dashboard()
  {
    $data['page'] = "DASHBOARD";
    return view('alumni.dashboard',$data);
  }
  public function profile()
  {
    $data['page'] = "PROFILE";
    return view('alumni.profile',$data);
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
  public function alumni_story_details()
  {
    $data['page'] = "ALUMNI STORY DETAILS";
    return view('front.alumni_story_details',$data);
  }
  public function program()
  {
    $data['page'] = "PROGRAM & EVENT";
    return view('front.program',$data);
  }
  

  
}
