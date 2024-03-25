<!-- top navigation -->
<div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li style="margin-top:7px;width:15%;">
                  
                  <span  class="user-profile" >
                    <img src="{{asset('themes/images/img.jpg')}}" alt=""> 
                    @if(Auth::user())
                       {{Auth::user()->name}}
                    @endif
<a href="{{route('admin.logout')}}" style="margin-left:12px;"><i class="fa fa-sign-out"></i></a></span>
               
                 </li>
                 
               

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->