<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roombook;
use App\Models\Room;
use Illuminate\Support\Facades\DB;


class RoombookController extends Controller
{
    //


    public function __construct(){
        $this -> middleware('auth');
    }
      



    public function create($room_id){

    	$rooms = Room::where('id',$room_id)->get();
$books = roombook::where('room',$room_id)->where('arrive','>','date(Y-m-d)')->get();
    		return  view('roombook',compact('rooms','books'));
    }


public function store(Request $request){

$data = $request->validate([
'phone'=>'required',
'arrive'=>['required','date_format:Y-m-d','after_or_equal:tommorow'],
'depart'=>['required','date_format:Y-m-d','after_or_equal:arrive'],
'room'=>'required',
]);

$available = roombook::where('room',$data['room'])->get();
    foreach($available as $available){
        if ($data['arrive'] < $available->arrive){
                    $data=$request->validate([
            'depart'=>'before:'.$available->arrive,
            'arrive'=>['required','date_format:Y-m-d','after_or_equal:tommorow'],
            'phone'=>'required',
            'room'=>'required',
            ]);
                        
        }
        else{
                $data=$request->validate([
            'arrive'=>'after:'.$available->depart,
            'depart'=>'required',
            'phone'=>'required',
            'room'=>'required',
            ]);
        break;
        }
    }

roombook::create([
'phone'=>$data['phone'],
'arrive'=>$data['arrive'],
'depart'=>$data['depart'],
'room'=>$data['room'],
'user_id'=>auth()->user()->id,

]);
return view('home');
   }
public function history(){
$user_id = auth()->user()->id;
$history = DB::table('roombooks')
            ->leftJoin('rooms', 'rooms.id', '=', 'roombooks.room')
            ->where('user_id',$user_id)
            ->get();
return view('history',compact('history'));
}
}

