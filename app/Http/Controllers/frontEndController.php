<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class frontEndController extends Controller
{
    public function index(){
        $data['teachers'] = Teacher::all()->take(4);
        return view('frontEnd.home', $data);
    }

    // public function notice(){
    //     return view('frontEnd.notice');
    // }

    public function teachers(){
        return view('frontEnd.teachers');
    }

    public function contact(){
        return view('frontEnd.contact');
    }

    public function about(){
        return view('frontEnd.about');
    }
    
}
