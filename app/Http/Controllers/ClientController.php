<?php

namespace App\Http\Controllers;

use App\Client;
use App\Driver;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class ClientController extends Controller
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
        ]);


        $input = $request->input();

        Client::create([
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        return response()->json("Client created !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    public function testLivraison(){

        $driver = Driver::find(2);
        $client= Client::find(1)->drivers()->save($driver,['prix' => 33]);

        $drivers = Client::find(1)->drivers()->get();


        foreach($drivers as $driver){

            if($driver->id == 2)
            return $driver->pivot->prix;
            //return $driver;
        }
    }
}
