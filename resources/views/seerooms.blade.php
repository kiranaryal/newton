
@extends('layouts.app')

@section('content')
  
<div id="rooms">
      <div class="container">
          <div class="section-header">
              <h2>Our Rooms</h2>
              <p>
                  we have diffrent types of room
              </p>
          </div>
  	@forelse($rooms as $room)
          <div class="row">
              <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-3">
                          <div class="room-img">
                              <div class="box12">
                                  <img src="storage/{{$room->image}}">
                                  <div class="box-content">
                                      <h3 class="title"> {{$room -> roomname}}</h3>
                                      <ul class="icon">
                                          <li><a href="#" data-toggle="modal" data-target="#modal-id"><i class="fa fa-link"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="room-des">
                              <h3><a href="#" data-toggle="modal" data-target="#modal-id">{{$room -> roomname}}</a></h3>
                              <p>we have this features shown in icon.</p>
                              <ul class="room-size">
                                  <li><i class="fa fa-arrow-right"></i></li>
                                  <li><i class="fa fa-arrow-right"></i>Beds:{{$room ->capacity}}</li>
                              </ul>
                              <ul class="room-icon">
                                  <li class="icon-1"></li>
                                  <li class="icon-2"></li>
                                  <li class="icon-3"></li>
                                  <li class="icon-4"></li>
                                  <li class="icon-5"></li>
                                  <li class="icon-6"></li>
                                  <li class="icon-7"></li>
                                  <li class="icon-8"></li>
                                  <li class="icon-9"></li>
                                  <li class="icon-10"></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="room-rate">
                              <h3>From</h3>
                              <h1>Rs{{$room->price}}</h1>
                              <a href="/roombook/{{$room->id}}">Book Now</a>
                          </div>
                      </div>
                  </div>
                  <hr>
              </div>

          </div>


@empty
no rooms
@endforelse
      </div>
 

 </div>
    @endsection
  