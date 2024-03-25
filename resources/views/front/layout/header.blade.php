<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> {{$username}}</strong></div>
	<div class="span6">
	<div class="pull-right">
		<a href="{{route('cart')}}"><span class="btn btn-mini btn-primary" style="font-size:11px;"><i class="icon-shopping-cart icon-white"></i> [ {{$items_count}} ] Itemes in your cart </span> </a> 
	    @php $sum=0; @endphp
                @foreach($carts as $cart)
                @php $sum=$sum+$cart->product->price*$cart->qty; @endphp  
				@endforeach
		<span class="btn btn-mini btn-primary" style="font-size:11px;cursor:text;">&#8377;{{number_format($sum,2)}}</span>
	</div>
	</div>
</div>

<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="{{route('home')}}"><img src="{{asset('themes/images/e-shopping-logo.png')}}" alt="E-Shopping"/></a>
		
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="{{route('specialOffer')}}">Special Offers</a></li>
	 <li class=""><a href="{{route('delivery')}}">Delivery</a></li>
	 <li class=""><a href="{{route('tac')}}">Terms and Conditions</a></li>
	 <li class=""><a href="{{route('faq')}}">FAQ</a></li>
	 <li class=""><a href="{{route('contact')}}">Contact</a></li>
	 <li class="">
		@if(Auth::user())
	    <a href="{{route('user_logout')}}" ><span class="btn btn-large btn-success">Logout</span></a>
	    @else
	    <a href="{{route('user_login')}}" ><span class="btn btn-large btn-success">Login</span></a>
	    @endif
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->