<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
    /*
     * Home Controller
     *
     * Renders the home page for the application.
     * Is configured to only allow guests.
     *
     */

    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct() {

        // Illuminate/Support::helpers.php  is where dd() is defined, plus lots of others

        // BEE: What is this doing and why cause redirect looop???????
        /////////$this->middleware('guest');


    }

    /**
     * Manages the home page
     *
     * @return \Illuminate\View\View
     */
    protected function index()
    {

        //flash()->success('You have come home');

        // Get all the current users
        $users = User::all()->sortBy(['surname','first_name']);

        return view('home', compact('users'));
    }
}
