<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\roombook;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    //



    public function dashboard(){

if(auth()->user()->is_admin==1){

$details = DB::table('roombooks')
            ->leftJoin('users', 'users.id', '=', 'roombooks.user_id')
            ->get();





return view('admin',compact('details'));
    }
    else{
    	return redirect('home');
    }
}
public function createroom(Request $request){
	
$data = request()->validate([
            'roomname' => 'required',
            'capacity' => 'required',
            'price' => 'required',

            'image'=>'required|image',
        ]);
        $imagePath = request('image')->store('uploads','public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();
        

        
        
	Room::create([
		'roomname'=>$request->roomname,
		'capacity'=>$request->capacity,
		'price'=>$request->price,
		 'image'=>$imagePath,


	]);
return redirect('/admin');

} 
}



