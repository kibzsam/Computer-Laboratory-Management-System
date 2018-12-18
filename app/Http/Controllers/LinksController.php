<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    //
    public function register(){
        return view ('auth/register');
    }
    public function welcome(){
        return view ('welcome');
    }
}
