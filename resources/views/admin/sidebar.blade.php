 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
      
                <ul class="nav side-menu">
                  
                 <li><a href="{{ url('Adminuser') }}"><i class="fa fa-table"></i>Profile<span></span></a>
                   
                  </li>
                  <li><a href="{{ url('contact') }}"><i class="fa fa-table"></i>Contact<span></span></a>
                   
                  </li>
                <li><a><i class="fa fa-edit"></i>Add Header <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                      
                      <li><a href="{{ URL::to('addmanu') }}">Add Manu</a></li>
                    
                      <li><a href="{{ URl::to('add_page') }}">Add page</a></li>
                     
                    </ul>
                  </li>
                 
                  
                  
                
              
                </ul>
              </div>
              <div class="menu_section">
               
                <ul class="nav side-menu">
                 
                  <a href="{{URL::to('/')}}/logoutuser" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
   <i class="fa fa-power-off" style="font-size:26px;color:red;padding: 0 11px"></i>
</a>    
<form id="frm-logout" action="{{URL::to('/')}}/logoutuser" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
    
              
     </li>                
                 
                </ul>
              </div>

            </div>