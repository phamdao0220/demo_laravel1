<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     function adminLogin(){
        return view('back_end.login');
    }
}
