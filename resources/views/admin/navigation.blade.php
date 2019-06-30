    <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    
                    @php
                    if(!empty(Auth::user()->name)){ @endphp
                                 {{ Auth::user()->name }}
                                 @php }
                                  else { @endphp
                                      <span>no name</span>
                              @php } @endphp
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right"></span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="{{URL::to('/')}}/logoutuser" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
    Logout
</a>    
<form id="frm-logout" action="{{ URL::to('/')}}/logoutuser" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
                      </a>
                    </li>
                  </ul>
                </li>

           
              </ul>
            </nav>
          </div>
        </div>