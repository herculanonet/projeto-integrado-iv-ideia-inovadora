<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index() 
    {
        return view('home');
    }

    public function blog() 
    {
        return view('blog');
    }

    public function about() 
    {
        return view('about');
    }

    public function pricing() 
    {
        return view('pricing');
    }
 
    public function faqs() 
    {
        return view('faqs');
    }

    public function register() 
    {
        return view('register');
    }

    public function login() 
    {
        return view('login');
    }

    public function logout() 
    {
        return view('logout');
    }


}
