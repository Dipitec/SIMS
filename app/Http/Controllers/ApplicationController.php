<?php

namespace App\Http\Controllers;

use App\Adm_course_list;
use App\Apl_basicinfo;
use App\Apl_otherdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('Application.index');
    }
   /*6666666666666666666666666666666666666666 __ BASIC INFO __66666666666666666666666666666666666666666*/
    public function basicInfo()
    {
       return view('Application.Basic_Info.index');
    }
    public function basicInfoCreate()
    {

          Apl_basicinfo::create($this->basicDataValidation());
        return redirect('/applicant/user/other-info')->with('SubmissionResponse','Your Submission has been submitted successful');
    }

    /*6666666666666666666666666666666666666666----END----66666666666666666666666666666666666666666*/


    /*6666666666666666666666666666666666666666 __ OTHER DETAILS __66666666666666666666666666666666666666666*/
    public function otherInfo()
    {
        return view("Application.Other_stuffs.otherInfo");
    }
    public function otherInfoCreate()
    {

     Apl_otherdetail::create($this->otherDataValidation());
        return redirect('/applicant/user/other-info')->with('SubmissionResponse','Your Submission has been submitted successful');
    }

    /*6666666666666666666666666666666666666666 __END__66666666666666666666666666666666666666666*/

    /*RETURN A GUARDIAN DETAILS FORM*/
    public function guardianInfo()
    {
        return view('Application.Other_stuffs.guardianInfo');
    }


    public function educationVerify(){
        return view("Application.Education_verifications.eduVerify");
    }
    public function paymentUploads()
    {
        return view("Application.AttachmentPayments.index");
    }

    public function selectCourse()
    {

        $coursesData = Adm_course_list::all();
        return view("Application.Course_Selection.selectCourse",compact('coursesData'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
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
       /* $data['user_id']= Auth::user()->id;*/
        return $data;
    }
}

