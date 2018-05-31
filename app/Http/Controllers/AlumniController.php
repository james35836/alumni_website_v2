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
      public function general_chat()
      {
            $data['user'] = StaticFunctionController::global();
            $data['page'] = "GENERAL CHAT";
            return view('alumni.general_chat',$data);
      }
      public function group_chat()
      {
            $data['user'] = StaticFunctionController::global();
            $data['page'] = "GROUP CHAT";
            return view('alumni.group_chat',$data);
      }
      public function gallery()
      {
            $data['user'] = StaticFunctionController::global();
            $data['page'] = "GALLERY";
            return view('alumni.gallery',$data);
      }
      public function event_calendar()
      {
            $data['user'] = StaticFunctionController::global();
            $data['page'] = "EVENT CALENDAR";
            return view('alumni.event_calendar',$data);
      }
      public function nearby()
      {
            $data['user'] = StaticFunctionController::global();
            $data['page'] = "PEOPLE NEARBY";
            return view('alumni.nearby',$data);
      }
      public function faqs()
      {
            $data['user'] = StaticFunctionController::global();
            $data['page'] = "BASIC FAQS";
            return view('alumni.faqs',$data);
      }
}