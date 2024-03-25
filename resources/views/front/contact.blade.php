@extends('front.layout.layout2')

@section('content')
<div id="mainBody">
<div class="container">
	<hr class="soften">
	<h1>Visit us</h1>
	<hr class="soften"/>	
	<div class="row">
		<div class="span4">
		<h4>Contact Details</h4>
		<p>	Sunshine Building, Shop No. 9 & 10, <br/>Metro Station, Madhuban Colony, 
			D.N.Nagar, <br/>Andheri West,  Mumbai, Maharashtra 400053<br/> 
			<br/>
			﻿Tel 022-2572211<br/>
			
		</p>		
		</div>
			
		<div class="span4">
		<h4>Opening Hours</h4>
			<h5> Monday - Friday</h5>
			<p>09:00am - 09:00pm<br/><br/></p>
			<h5>Saturday</h5>
			<p>09:00am - 07:00pm<br/><br/></p>
			<h5>Sunday</h5>
			<p>12:30pm - 06:00pm<br/><br/></p>
		</div>
		<div class="span4">
		
		<h4>Send Message</h4>
		<form class="form-horizontal" method="post" action="{{route('contactMessage.store')}}">
		@csrf
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="name" name="name" class="input-xlarge" required=""/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="email" name="email" class="input-xlarge" required=""/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="subject" name="subject" class="input-xlarge" required=""/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge" name="message" placeholder="Write your message here..." required=""></textarea>
           
          </div>

            <button class="btn btn-success" type="submit">Submit</button>
			@if(Session::has('message'))
<span class="alert" style="color:#468847;background-color:#fff;border: none;">{{ Session::get('message') }}</span>
@endif

        </fieldset>
      </form>
		</div>
	</div>
	<div class="row">
	<div class="span12">
	
	
	
	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4482.714551625254!2d72.82821758757555!3d19.1296401673788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMetro%20station%2C%20Madhuban%20Colony%2C%20D.N.Nagar%2C%20Andheri%20West%2C%20Mumbai!5e0!3m2!1sen!2sin!4v1704396381963!5m2!1sen!2sin" width="600" height="300"
		 style="width:100%; height:300;border:0;" ></iframe>

</div>
	</div>
</div>
</div>
<!-- MainBody End ============================= -->
@endsection