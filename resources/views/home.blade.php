@extends('layouts.app')

@section('content')

<br>


<!-- Header Slider Start -->
<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
      <li data-target="#headerSlider" data-slide-to="1"></li>
      <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="img/slider/header-slider-1.jpg" alt="Royal Hotel">
          <div class="carousel-caption">
              <h1 class="animated fadeInRight">ABC HOTEL</h1>
          </div>
      </div>

      <div class="carousel-item">
          <img src="img/slider/header-slider-2.jpg" alt="ABC HOTEL">
          <div class="carousel-caption">
              <h1 class="animated fadeInLeft">Welcome </h1>
          </div>
      </div>

      <div class="carousel-item">
          <img src="img/slider/header-slider-3.jpg" alt="ABC HOTEL">
          <div class="carousel-caption">
              <h1 class="animated fadeInRight">Desired of every guests</h1>
          </div>
      </div>
  </div>

  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
</div>
<!-- Header Slider End -->

<!-- Search Section Start 
<div id="search">
  <div class="container">
      <div class="form-row">
          <div class="control-group col-md-3">
              <label>Check-In</label>
              <div class="form-group">
                  <div class="input-group date" id="date-3" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#date-3" />
                      <div class="input-group-append" data-target="#date-3" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="control-group col-md-3">
              <label>Check-Out</label>
              <div class="form-group">
                  <div class="input-group date" id="date-4" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#date-4" />
                      <div class="input-group-append" data-target="#date-4" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="control-group col-md-3">
              <div class="form-row">
                  <div class="control-group col-md-6">
                      <label>Adult</label>
                      <select class="custom-select">
                              <option selected>0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                  </div>
                  <div class="control-group col-md-6 kid">
                      <label>Kid</label>
                      <select class="custom-select">
                              <option selected>0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                  </div>
              </div>
          </div>
          <div class="control-group col-md-3">
              <button class="btn btn-block">Search</button>
          </div>
      </div>
  </div>
</div>-->
<!-- Search Section End -->

<!-- Welcome Section Start -->
<div id="welcome">
  <div class="container">
      <h3>Welcome to ABC Hotel</h3>
      <p> ABC Hotel is a family owned Boutique Hotel that desires to cater and provide guests with personalized hospitality based on what they prefer and not what is customary. Whether the guest is looking for quiet time and lots of privacy or seeking
          energetic, friendly environment in the most delightful place away from home, ABC Hotel can accommodate..</p>
      
  </div>
</div>
<!-- Welcome Section End -->

<!-- Amenities Section Start -->
<div id="amenities">
  <div class="container">
      <div class="section-header">
          <h2>Amenities & Services</h2>
          <p>
              Our service is given below:
          </p>
      </div>
      <div class="row">
          <div class="col-md-3 col-sm-6 icons">
              <i class="icon icon-2"></i>
              <h3>Air Conditioner</h3>
              <p>we have air conditional service for guests. it works 365 days </p>
          </div>


          <div class="col-md-3 col-sm-6 icons">
              <i class="icon icon-7"></i>
              <h3>WiFi</h3>
              <p>Free wifi is all overs the hotel</p>
          </div>

          <div class="col-md-3 col-sm-6 icons">
              <i class="icon icon-9"></i>
              <h3>Mini Bar</h3>
              <p>we have mini bar for behavages purposes</p>
          </div>
          <div class="col-md-3 col-sm-6 icons">
              <i class="icon icon-10"></i>
              <h3>Kitchen</h3>
              <p>yes we have own kitchen to serve delicious food</p>
          </div>
      </div>
  </div>
</div>


<div id="call-us">
  <div class="container">
      <div class="section-header">
          <h2>Click Below to Call Us</h2>
          <p>
              please feel free to contract us
          </p>
      </div>
      <div class="row">
          <div class="col-12">
              <a href="tel:+977 9863459698">+977 9863459698</a>
          </div>
      </div>
  </div>
</div>
<!-- Call Section End -->

 <!-- Footer Section Start -->
    















@endsection
