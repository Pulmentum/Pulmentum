<?php

namespace App\Http\Controllers;
use App;
//use Illuminate\Support\Facades\Session;
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

    public function language()
    {   
        $lang = explode('?lang=', url()->current());
        $url = explode('/public/', url()->previous());
        $url = end($url);
        //Session::put('locale', $lang);
        //session(['my_locale' => Request::Input($lang)]);
        //App::setLocale($lang);
        return redirect($url);
    }
}