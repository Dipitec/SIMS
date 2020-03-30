<?php

namespace App\Http\Controllers;


use App\Adm_course_level;
use App\Auth_user;
use App\User;
use Illuminate\Http\Request;

class OtherPagesController extends Controller
{
    public function index()
    {
//
            $data = User::all();
        return view('welcome',compact('data'));
    }

    public function create()
    {
        //
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
