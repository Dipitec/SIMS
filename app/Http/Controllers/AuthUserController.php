<?php

namespace App\Http\Controllers;

use App\Auth_user;
use Illuminate\Http\Request;

class AuthUserController extends Controller
{

    public function register()
    {
        return view('Authentification.userRegister');
    }


    public function login()
    {
        return view('Authentification.userLogin');
    }


    public function store()
    {
        $data = request()->validate([
            'first_name'=> 'required',
            'middle_name'=> '',
            'last_name'=> 'required',
            'phone_number'=> 'required|min:10|max:12',
            'email'=> 'required|email',
            'gender'=> 'required',
            'userid_number'=> 'required',
            'password'=> 'required',
            'confirm_password'=> 'required'
        ]);
//        updating the username
        $data['username'] = $data['last_name'].'.'. $data['first_name'];
        $data['password'] = bcrypt($data['password']);
        Auth_user::create($data);
        return redirect('/');
    }


    public function loginChecking()
    {
            $data = request()->validate(
                [
                    'email'=> 'required|email',
                    'password'=> 'required'
                ]
            );
            if ($data['email']){
                return 'welcome';
            }


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
