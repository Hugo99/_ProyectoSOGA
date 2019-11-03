<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        return view('home',compact('alertas'));
    }

    public function prof(){
      $nombres = App\user::all();

      return view('profesores',compact('nombres'));
    }

    /*public function sidebar(){
      $alertas = App\alertas::all();

      return view('sidebar', compact('alertas'));
    }*/
  }
