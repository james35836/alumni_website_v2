<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ActiveAuthController;
use App\Http\Model\TblUserModel;


use App\Http\Model\TblEventModel;

use App\Http\Model\TblAnnouncementModel;


use Redirect;
use Session;
use Crypt;
use Mail;
use Carbon\Carbon;
class AlumniController extends ActiveAuthController
{
    public static function global_variable()
    {
        $variable['unique_name']   = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,5);
        return $variable;
    }
    
    public function submit(Request $request)
    {
        dd($request->all());
    }
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

        $data['_announcement']  = TblAnnouncementModel::get();

        return view('alumni.announcement',$data);
    }
    public function post_announcement()
    {
        $data['user'] = StaticFunctionController::global();
        $data['page'] = "ANNOUNCEMENT";
        return view('alumni.post_announcement',$data);
    }
    public function post_announcement_submit(Request $request)
    {
        $announcementData  = new TblAnnouncementModel;
        $announcementData->announcement_name          = $request->announcement_name;
        $announcementData->announcement_description   = $request->announcement_description;
        $announcementData->announcement_date          = $request->announcement_date;
        $announcementData->announcement_created       = Carbon::now();
        $announcementData->user_id             = 2;
        $announcementData->save();

        return Redirect::back()->with('james',"james");
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
    public function post_event()
    {
        $data['user'] = StaticFunctionController::global();
        $data['page'] = "POST EVENT";
        return view('alumni.post_event',$data);
    }
    public function post_event_submit(Request $request)
    {
        $file          = $request->file('event_image');
        $eventData  = new TblEventModel;
        $eventData->event_image         = StaticFunctionController::upload_file($file,'event_image');
        $eventData->event_name          = $request->event_name;
        $eventData->event_description   = $request->event_description;
        $eventData->event_date          = $request->event_date;
        $eventData->event_created       = Carbon::now();
        $eventData->user_id             = 2;
        $eventData->save();

        return Redirect::back()->with('james',"james");
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