<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /*
     * Welcome Controller
     *
     * Renders the marketing page for the application.
     * Is configured to only allow guests.
     *
     */

    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Manages the welcome page
     *
     * @return \Illuminate\View\View
     */
    protected function index()
    {
        // Is there a user logged in?
        $loggedInUser = \Auth::user();

        return view('welcome', compact('users', 'loggedInUser'));
    }
}
