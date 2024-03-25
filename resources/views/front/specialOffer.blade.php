@extends('front.layout.layout')

@section('content')
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="{{route('home')}}">Home</a> <span class="divider">/</span></li>
		<li class="active">Special offers</li>
    </ul>
	<h4> 20% Discount Special offer</h4>	
	<hr class="soft"/>

<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
		@foreach($offer_products as $offer_product)
			<li class="span3">
			  <div class="thumbnail">
				<a href="{{route('productDetails',$offer_product->id)}}"><img src="{{asset('uploads/'.$offer_product->image)}}" alt=""/></a>
				<div class="caption">
				  <h5>{{$offer_product->name}}</h5>
				  <h4 style="text-align:center"><a class="btn" href="{{route('productDetails',$offer_product->id)}}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="{{route('productDetails',$offer_product->id)}}">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" style="cursor:text;">&#8377;{{number_format($offer_product->price,2)}}</a></h4>
				</div>
			  </div>
			</li>
			@endforeach
		  </ul>


	<hr class="soft"/>
	</div>
</div>
<br class="clr"/>
</div>
@endsection