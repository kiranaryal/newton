@extends('layouts.app')
@section('content')
<body>
    <!-- Contact Section Start -->
    <div id="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contact</h2>
                <p>
                    for more details please contract us
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row contact-info">
                        <div class="col-md-4">
                            <div class="info-item">
                                <p><i class="fa fa-map-marker"></i>Bafal, kathmandu </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-item">
                                <p><i class="fa fa-envelope"></i> <a href="mailto:abc@example.com">abc@example.com</a></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-item">
                                <p><i class="fa fa-phone"></i><a href="tel:+977 9863459698">+9779863459698</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="E.g. John Sina" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="E.g. email@example.com" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="E.g. Room Booking" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label>Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="E.g. I need a premium room" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="button"><button type="submit" id="sendMessageButton">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->