<?php

namespace App\Http\Controllers;

use App\Adm_course_list;
use App\Apl_basicinfo;
use App\Apl_education_verification;
use App\Apl_kin1;
use App\Apl_otherdetail;
use App\Apl_primary_edu_info;
use App\Applicant_basic_detail;
use App\Applicant_other_detail;
use App\Applicant_primary_education;
use App\Applicant_relative_detail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(User $user)
    {
        /*todo  Note: left side links needs middleware to check the status where The user is already filled the form

        */
//        KEYS FOR THE ONE TIME SUBMISSION OF FORMS FROM INDEX LINKS
        $userId = Auth::user()->id;
        $basicKey = Applicant_basic_detail::where('user_id',$userId)->get();
        $otherDetails = Applicant_other_detail::where('user_id',$userId)->get();
        $guardianDetails =Applicant_relative_detail::where('user_id',$userId)->get();
        $primaryDetails =Applicant_primary_education::where('user_id',$userId)->get();
        $passBasicKey = count($basicKey);
        $passOtherInfoKey = count($otherDetails);
        $passGuardianKey= count($guardianDetails);
        $primaryEducationKey= count($primaryDetails);
        return view('Application.index',compact("passBasicKey","passOtherInfoKey","passGuardianKey","primaryEducationKey","user"));
    }
   /*6666666 __ BASIC INFO __66666*/
    public function basicInfo()
    {
       return view('Application.Basic_Info.index');
    }
    public function basicInfoCreate()
    {

          Applicant_basic_detail::create($this->basicDataValidation());
        return redirect('/applicant/user/other-info')->with('SubmissionResponse','Your Submission has been submitted successful');
    }
    public function basicInfoView()
    {
        $userId = Auth::user()->id;
        $basicInformation = Applicant_basic_detail::where("user_id",$userId)->get();
        return view('Application.Basic_Info.view_details',compact('basicInformation'));
    }

    /*6666666666666666666666666666666666666666----END----66666666666666666666666666666666666666666*/


    /*666666666 __ OTHER DETAILS __666666666*/
    public function otherInfo()
    {
        return view("Application.Other_stuffs.otherInfo");
    }
    public function otherInfoCreate()    {

     Applicant_other_detail::create($this->otherDataValidation());
        return redirect('applicant/user/closest-relative')->with('SubmissionResponse','Your Submission has been submitted successful');
    }
    public function otherInfoView()    {

        $userId = Auth::user()->id;
        $otherDetailsView = Applicant_other_detail::where("user_id",$userId)->get();
        return view("Application.Other_stuffs.view_details",compact('otherDetailsView'));
    }

    /*6666666666666666666666666666666666666666 __END BASIC INFO__66666666666666666666666666666666666666666*/

    /*66666666 __ OTHER DETAILS __666666*/

    public function guardianInfo()
    {
        return view('Application.Other_stuffs.guardianInfo');
    }
    public function  CreateGuardianInfo(){
        Applicant_relative_detail::create($this->guardianValidation());
        return redirect('/applicant/user/education-level')->with('SubmissionResponse','Your Submission has been submitted successful');
    }
    public function GuardianInfoView()
    {
        $userId = Auth::user()->id;
        $guardianDetailsView = Applicant_relative_detail::where('user_id',$userId)->get();
        return view('Application.Other_stuffs.view_details_guardian',compact('guardianDetailsView'));
    }


    /*6666666666666666666666666666666666666666 __ END KIN INFO __66666666666666666666666666666666666666666*/

    /*6666666 __ EDUCATION VERIFICATION __666666*/
/*todo Deal: One time form Submission of both primary school Education*/
    public function educationVerify(){
        $userId = Auth::user()->id;
        $primaryKey = Applicant_primary_education::where('user_id',$userId)->get();
        $primaryEducationKey= count($primaryKey);
        /*todo After Education Veryfication*/
        //$primaryEducationKey= count($verifiedEducationKey);
       //$verifiedEducationKey = Apl_education_verification::where('user_id',$userId)->get();
        return view("Application.Education_verifications.eduVerify",compact("primaryKey","verifiedEducationKey","primaryEducationKey"));
    }
    public function  CreatePrimaryEducation(){
       $data = request()->validate([
           "primary_name"=> "required|max:50|min:3",
           "primary_graduation_year"=> "min:4|integer",
           "primary_school_district"=> "required|max:50|min:3",
       ]);
        $data['application_status']= 1;
        $data['user_id']= Auth::user()->id;
       Applicant_primary_education::create($data);
        return redirect('/applicant/user/attachments-and-payments')->with('SubmissionResponse','Your Submission has been submitted successful');


    }

    /*6666666666666666666666666666666666666666 __END EDUCATION__66666666666666666666666666666666666666666*/

    /*6666666 __ UPLOADS AND PAYMENTS __666666*/
    public function paymentUploads()
    {
        return view("Application.AttachmentPayments.index");
    }
    /*6666666666666666666666666666666666666666 __END  UPLOADS AND PAYMENTS__66666666666666666666666666666666666666666*/

    /*6666666 __COURSE SELECTION __666666*/
    public function selectCourse()
    {
            /*TODO :FILTERING THE COURSE BASED ON WHETHER ITS  BASIC CERTIFICATE DIPLOMA OR BACHELOR*/
        $coursesData = Adm_course_list::all();
        return view("Application.Course_Selection.selectCourse",compact('coursesData'));
    }
    public function createSelectedCourses()
    {
        /*TODO :DEALING WITH JAVASCRIPT*/
        dd("hi there");
    }

    /*6666666666666666666666666666666666666666 __END  UPLOADS AND PAYMENTS__66666666666666666666666666666666666666666*/


    private  function  basicDataValidation(){

        $data =  request()->validate([
            'first_name'=> 'required|max:50|min:3',
            'middle_name'=> 'required|max:50|min:3',
            'last_name'=> 'required|max:50|min:3',
            'dob'=> 'required|date',
            'religion'=> 'required',
            'nationality'=> 'required',
            'country_of_birth'=> '',
            'region'=> 'required',
            'district'=> 'required',
            'email'=> 'required|email',
            'mobile_number'=> 'required|max:13|min:10',
            'mobile_number_alt'=> 'max:13|min:10',
            'p_o_box'=> 'required|max:50|min:3',
            'place_of_birth'=> 'required|max:50|min:3',
            'gender'=> 'required',
        ]);
        $data['application_status'] = 1;
        $data['user_id']= Auth::user()->id;

       // dd($data);
        return $data;

    }
    private  function  otherDataValidation(){
        $data = request()->validate([
            'ward'=> 'required|max:50|min:3',
            'street'=> 'required|max:50|min:3',
            'house_number'=> 'required|max:50|min:3',
            'marital_status'=> 'required|max:50|min:3',
            'disability_status'=> 'required|max:50|min:3',
            'disability_details'=> '',
            'employment'=> 'required',
            'preferred_session'=> 'required',
            'need_accommodation'=> 'required',
        ]);
        $data['application_status']= 1;
      $data['user_id']= Auth::user()->id;
        return $data;
    }
    private function  guardianValidation(){
        $data = request()-> validate([
            'first_name'=> '',
            'last_name'=> '',
            'mobile_number'=> '',
            'mobile_number_alt'=> '',
            'email'=> '',
            'relationship'=> '',
            'national_id'=> '',
            'region'=> '',
            'district'=> '',
            'p_o_box'=> '',
        ]);
        $data['application_status']= 1;
        $data['user_id']= Auth::user()->id;
        return $data;
    }
}

