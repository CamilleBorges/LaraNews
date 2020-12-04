<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Validator;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller{

    public function index(){

        $users = User::all();

        return view('users', [
            'users' => $users
        ]);
    }

    public function create(){
        $user = new User();

        return view('user', [
            'user' => $user
        ]);
    }

    public function store(Request $request){

        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        return redirect()->route('users.index');
    }

}
