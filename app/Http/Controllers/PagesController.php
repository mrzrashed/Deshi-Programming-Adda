<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function questions(){
        return view('pages.topquestions');
    }

    public function login(){
        return view('auth.login');
    }
    public function create_post(){
        return view('posts.create');
    }
}
