<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(Request $request){
        if ($request->session()->exists("username")) {
            return redirect('/todolist');
        }else{
            return redirect('/login');
        }
    }
}
