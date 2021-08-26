<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $rooms = Room::all();
        
        return view('home',compact('rooms'));
    }
    public function seerooms()
    {
        $rooms = Room::get();
        return view('seerooms',compact('rooms'));
    }
}
