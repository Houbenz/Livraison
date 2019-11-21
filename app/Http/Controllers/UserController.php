<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Location;

class UserController extends Controller
{
     public function getUsers(){
        $users = DB::table('users')->get();

        return $users;
    }

    public function registerPage(){
        return view('test');
    }


  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname'=> 'required','string','max:255',
            'lastname' => 'required','string','max:255',
            'email' => 'required','string','max:255','unique:clients',
            'password'=> 'required','min:6','confirmed',
            'wilaya'=>'required','string','max:30',
        ]);

        $input = $request->input();


            $user= new Client;
            $user->firstname = $input['firstname'];
            $user->lastname = $input['lastname'];
            $user->email = $input['email'];
            $user->password =Hash::make($input['password']);


        $location=Location::where('wilaya',$input['wilaya'])->first();

        $user->location()->associate($location);

        $user->type="Client";
        $user->save();

        $user1=Client::where('firstname',$input['firstname'])->first();

        return response()->json('user created !'.$user1->lastname.'  '.$user1->location->wilaya);
    }


    /**
     * return the view of login page
     */
    public function loginPage(){
        return view('auth.login');
    }
    /**
     *
     * used for logging
     *
     */
    public function login(Request $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials))
            return 'logged in';
        else
            return redirect('/api/login');
    }

}
