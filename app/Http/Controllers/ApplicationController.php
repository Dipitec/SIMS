<?php

namespace App\Http\Controllers;

use App\Adm_course_list;
use Illuminate\Http\Request;

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
//                RETURN A FORM FOR BASIC INFO
    public function basicInfo()
    {
       return view('Application.Basic_Info.index');
    }
                    /*RETURN A OTHER DETAILS FORM*/
    public function otherInfo()
    {
        return view("Application.Other_stuffs.otherInfo");
    }
    /*RETURN A GUARDIAN DETAILS FORM*/
    public function guardianInfo()
    {
        return view('Application.Other_stuffs.guardianInfo');
    }
    public function basicInfoCreate()
    {
        $data = request()->validate([
           'first_name'=> 'required',
           'middle_name'=> 'required',
           'last_name'=> 'required',
           'dob'=> 'required',
           'religion'=> 'required',
           'nationality'=> 'required',
           'country_of_birth'=> 'required',
           'region'=> 'required',
           'district'=> 'required',
           'email'=> 'required|email',
           'mobile_number'=> 'required',
           'mobile_number_alt'=> '',
           'p_o_box'=> 'required',
           'place_of_birth'=> 'required',
           'gender'=> 'required',
        ]);
        dd($data);
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
}
