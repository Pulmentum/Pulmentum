<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('curs.moodle');
    }

    // public function language(lang)
    // {
    //     $url1 = url()->current();
    //     $url2 = URL::to('/');
    //     $url2 = strlen($url2);
    //     $n = strlen($url1);
    //     $n = $n*(-1);
    //     $url1 = substr($url1, $url2, -$n);
    //     App::setLocale($lang);
    //     return view($url1);
    // }
}