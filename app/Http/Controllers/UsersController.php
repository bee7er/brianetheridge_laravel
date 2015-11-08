<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;

class UsersController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');      # User must be logged in
    }

    /**
     * Displays a list of users
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get all the current users
        $users = User::all()->sortBy(['surname','first_name']);

        return view('users.index', compact('users'));
    }
}
