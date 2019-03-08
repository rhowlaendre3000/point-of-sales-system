<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Auth;
class hireController extends Controller
{
    //


    public function index(){
    
    $user=User::all();
    $profile=Profile::all();

        return view('hire')->with(compact('user'))->with(compact('profile'));
    }
}
