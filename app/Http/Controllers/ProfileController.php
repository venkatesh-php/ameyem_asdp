<?php

namespace Ameyem\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('/profile');
    }
}
