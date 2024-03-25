<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('admin.dashboard')}}" class="site_title"><i class="fa fa-cart-plus"></i> <span>E-Shopping!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('themes/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>
                @if(Auth::user())
                {{Auth::user()->name}}
              @endif</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i> Dashboard </a>
                  </li>
                  <li><a><i class="fa fa-table"></i> Category Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display:none;">
                      <li><a href="{{route('category.list')}}">List</a></li>
                      <li><a href="{{route('category.create')}}">Create</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-product-hunt"></i> Product Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display:none;">
                      <li><a href="{{route('product.list')}}">List</a></li>
                      <li><a href="{{route('product.create')}}">Create</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> User Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display:none;">
                      <li><a href="{{route('admin.users')}}">List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-product-hunt"></i> Product Booking Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display:none;">
                      <li><a href="{{route('booking.products')}}">List</a></li>
                    </ul>
                  </li>
                  <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out"></i> Logout </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

           
          </div>
        </div>
