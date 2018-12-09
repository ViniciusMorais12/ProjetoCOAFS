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
        
        if (\Auth::user()->admin){
            return view ('home');
        }
        else{
            return redirect(route('noticias'));
        }
        
    }
    public function logout() {
        \Auth::logout();
        return redirect(route('noticias'));
    }
}
