<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminInvitationsController extends Controller
{
    //
    public function index () {
        return view('auth.register');
    }
}
