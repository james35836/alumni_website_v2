<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ActiveAuthController;
use App\Http\Model\TblUserModel;
use Redirect;
use Session;
use Crypt;
use Mail;


class AlumniController extends ActiveAuthController
{
  public function dashboard()
  {
    $data['user'] = StaticFunctionController::global();
    $data['page'] = "DASHBOARD";
    // dd($data);
    return view('alumni.dashboard',$data);
  }
  public function announcement()
  {
    $data['user'] = StaticFunctionController::global();
    $data['page'] = "ANNOUNCEMENT";
    return view('alumni.announcement',$data);
  }
  public function manage_user()
  {
    $data['user'] = StaticFunctionController::global();
    $data['page'] = "MANAGE USER";
    return view('alumni.manage_user',$data);
  }
  public function alumni_directory()
  {
    $data['user'] = StaticFunctionController::global();
    $data['page'] = "ALUMNI DIRECTORY";
    return view('alumni.alumni_directory',$data);
  }

  public function profile()
  {
    $data['user'] = StaticFunctionController::global();
    $data['page'] = "PROFILE";
    return view('alumni.profile',$data);
  }
  public function timeline()
  {
    $data['user'] = StaticFunctionController::global();
    $data['page'] = "TIMELINE";
    return view('alumni.timeline',$data);
  }
  

  
}
