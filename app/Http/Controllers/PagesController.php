<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /*
     * Pages Controller
     *
     * Renders the various static pages for the application.
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
     * Manages the home page
     *
     * @return \Illuminate\View\View
     */
    protected function cookies()
    {


        return view('pages/cookies');
    }


}
