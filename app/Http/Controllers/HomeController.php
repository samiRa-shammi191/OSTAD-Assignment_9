<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('content.home');
    }
    public function about(){
        return view('content.about');
    }
    public function services(){
        return view('content.services');
    }
    public function project(){
        return view('content.project');
    }
    public function contact(){
        return view('content.contact');
    }



}
