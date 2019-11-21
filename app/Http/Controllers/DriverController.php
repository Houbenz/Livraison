<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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


            $driver= new Driver;
            $driver->firstname = $input['firstname'];
            $driver->lastname = $input['lastname'];
            $driver->email = $input['email'];
            $driver->password =Hash::make($input['password']);


        $location=Location::where('wilaya',$input['wilaya'])->first();

        $driver->location()->associate($location);


        $driver->save();

        $driver1=Driver::where('firstname',$input['firstname'])->first();

        return response()->json('Driver created !'.$driver1->lastname.'  '.$driver1->location->wilaya);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        //
    }
}
