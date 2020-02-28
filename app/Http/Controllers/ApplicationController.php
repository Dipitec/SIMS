<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function index()
    {
        return view('Application.index');
    }

    public function basicInfo()
    {
        //dd('hello');
       return view('Application.Basic_Info.index');
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
