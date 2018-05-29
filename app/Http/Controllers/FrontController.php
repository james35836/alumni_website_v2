<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\TblUserModel;
use App\Http\Model\TblUserInfoModel;

use Redirect;
use Session;
use Crypt;
use Mail;

use Carbon\Carbon;


class FrontController extends Controller
{
  public function home()
  {
    $data['page'] = "HOME";
    return view('front.home',$data);
  }
  public function login()
  {
    session::forget('active');
    session::forget('user_id');
    $data['page'] = "LOGIN";
    return view('front.login',$data);
  }
  public function login_submit(Request $request)
  {
    $validate  = TblUserModel::where('user_email',$request->user_email);
    if($validate->count()==0)
    {
      $link = "/redirect/email_undefine";
    }
    else
    {
      $user = $validate->first();
      if($request->user_password==Crypt::decrypt($user->user_password))
      {
        Session::put('active','active_user_login');
        Session::put('user_id',$user->user_id);
        // dd(Session::get('active'),Session::get('user_id'));
        return Redirect::to("/dashboard");
      }
      else
      {
        $link = "/redirect/password_incorrect";
      }
    }
    return Redirect::to($link);
  }
  public function register()
  {
    $data['page'] = "REGISTER";
    return view('front.register',$data);
  }
  public function register_submit(Request $request)
  {
    $validate  = TblUserModel::where('user_email',$request->user_email)->count();
    if($validate==0)
    {
      $user_data = new TblUserModel;
      $user_data->user_email          = $request->user_email;
      $user_data->user_password       = Crypt::encrypt($request->user_password);
      $user_data->user_level          = 'MEMBER';
      $user_data->user_status         = 'REGISTER';
      $user_data->save();

      $user_info = new TblUserInfoModel;
      $user_info->user_number         = '0001';
      $user_info->user_profile        = '/images/profile.png';
      $user_info->user_first_name     = $request->user_first_name;
      $user_info->user_middle_name    = $request->user_middle_name;
      $user_info->user_last_name      = $request->user_last_name;
      $user_info->user_gender         = $request->user_gender;
      $user_info->user_birthdate      = Carbon::now();
      $user_info->user_contact_number = 'Your Contact Number';
      $user_info->user_address        = 'Your Location';
      $user_info->user_course         = 'Your Course';
      $user_info->user_current_work   = 'Your Current Work';
      $user_info->user_year_graduate  = $request->user_year_graduate;
      $user_info->user_date_added     = Carbon::now();
      $user_info->user_about_me       = 'Say something about your self.';
      $user_info->user_id             = $user_data->user_id;
      $user_info->save();

      // $date                   = date("F j, Y",strtotime((new \DateTime())->format('Y-m-d')));
      // $name                   = $user_info->user_first_name;
      // $mail                   = $check->user_email;
      // $password               = Crypt::decrypt($check->user_password);
      // $link                   = 'http://mvm.digimahouse.com/login';
      // $data                   = array('name'=>$name,'password'=>$password,'email_add'=>$mail,'date'=>$date,'link'=>$link);
      // $check_mail             = Mail::send('front.pages.send_password_reset_link', $data, function($message) use($data) {
      //                             $message->to($data['email_add'], 'Zute Stranice')->subject('PASSWORD RESET');
      //                             $message->from('guardians35836@gmail.com','Zute Stranice');
      //                         });
      
      $link = "/redirect/success";
    }
    else
    {
      $link = "/redirect/exist";
    }
    return Redirect::to($link);
  }
  public function redirect($ref)
  {
    if($ref=="success")
    {
      $data['ref']  = $ref;
      $data['page'] = "SUCCESS";
    }
    else
    {
      $data['ref']  = $ref;
      $data['page'] = "EMAIL EXIST";
    }
    return view('front.redirect',$data);
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
  public function alumni_directory()
  {
    $data['page'] = "ALUMNI DIRECTORY";
    return view('front.alumni_directory',$data);
  }
  public function carrer()
  {
    $data['page'] = "CARRER OPPORTUNITY";
    return view('front.carrer',$data);
  }
  public function carrer_details()
  {
    $data['page'] = "CARRER DETAILS";
    return view('front.carrer_details',$data);
  }
  public function program()
  {
    $data['page'] = "PROGRAM & EVENT";
    return view('front.program',$data);
  }
  

  
}
