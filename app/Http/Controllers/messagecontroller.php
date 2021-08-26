<?php

namespace App\Http\Controllers;
use App\Models\message;
use Illuminate\Http\Request;

class messagecontroller extends Controller
{
   public function createmessage(Request $req){
   	message::create([
   		'name'=>$req->name,
   	 'email'=>$req->email, 
   	 'message'=>$req->message
   	]);
  
return redirect('/home');

   }
public function show(){
	$messages = message::get();
return view('adminmessages',compact('messages'));
}






}