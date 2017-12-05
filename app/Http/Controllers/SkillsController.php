<?php

namespace Ameyem\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        return view('/skills');
    }
}
