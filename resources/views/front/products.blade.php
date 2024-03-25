@extends('front.layout.layout')

@section('content')
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="{{route('home')}}">Home</a> <span class="divider">/</span></li>
		<li class="active">{{$category_name}}</li>
    </ul>
	<h3>{{$category_name}}</h3>	
	<hr class="soft"/>

<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
        @foreach($products as $product)
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="{{asset('uploads/'.$product->image)}}" alt=""/></a>
				<div class="caption">
				  <h5>{{$product->name}}</h5>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&#8377;{{$product->price}}</a></h4>
				</div>
			  </div>
			</li>
			@endforeach
		  </ul>
	</div>
</div>
	
<br class="clr"/>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
@endsection