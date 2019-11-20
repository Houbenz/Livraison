<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function getUsers(){
        $users = DB::table('users')->get();

        return $users;
    }



    public function store(Request $request){


        $input = $request->input();

        User::create([
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'email' => $input['email'],
            'type' => $input['type'],
            'password' => Hash::make($input['password']),
        ]);

        $user= DB::table('users')->where('firstname','hocine')->first();

        if($user != null)
            return "added ";
        else
            return "no one is added";
    }
}
