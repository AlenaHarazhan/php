<?php

namespace App\Http\Controllers;


class BaseController extends Controller
{
    public function getIndex(){
        return view('index');
       }
       public function login(){
           return view('login-form');
          }
}
