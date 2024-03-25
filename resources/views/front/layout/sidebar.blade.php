<!-- Sidebar ================================================== -->
<div id="sidebar" class="span3">
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
		<li>
		@foreach($categories as $category)
		 @if($category->children->isNotEmpty())
		 <a>{{$category->name}} </a>
				<ul>
				@foreach($category->children as $child)
				<li><a href="{{route('products',$child->id)}}"><i class="icon-chevron-right"></i> {{ $child->name }} </a></li>
				@endforeach
				</ul>
				@else
				<a href="{{route('products',$category->id)}}">{{$category->name}} </a>
				@endif 
				
		@endforeach
			</li>
		
			<!--<li class="subMenu open"><a> ELECTRONICS [230]</a>
				<ul>
				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> CLOTHES [840] </a>
			<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
				<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
			</ul>
			</li>
			<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
			<li><a href="products.html">SPORTS & LEISURE [58]</a></li>
			<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>--->
		</ul>
		<br/>
		  <div class="thumbnail">
			<img src="{{asset('themes/images/products/1.jpg')}}" alt="Nikon camera"/>
			<div class="caption">
			  <h5>Nikon Camera</h5>
				<h4 style="text-align:center"><a class="btn" href="{{ url('/productDetails/27') }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="{{ url('/productDetails/27') }}">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" style="cursor:text;">&#8377;450.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="{{asset('themes/images/products/8.jpg')}}" title="USB SanDisk 16GB" alt="USB SanDisk 16GB">
				<div class="caption">
				  <h5>USB SanDisk 16GB</h5>
				    <h4 style="text-align:center"><a class="btn" href="{{ url('/productDetails/28') }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="{{ url('/productDetails/28') }}">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" style="cursor:text;">&#8377;599.00</a></h4>
				</div>
			  </div><br/>
			
	</div>
<!-- Sidebar end=============================================== -->