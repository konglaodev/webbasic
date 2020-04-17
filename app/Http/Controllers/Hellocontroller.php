<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hellocontroller extends Controller
{
    


    function Show(){
        return view('create.users')
        ->with('name','kongjai')
        ->with ('title','computer science');
    }

}

