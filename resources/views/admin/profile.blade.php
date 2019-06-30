<div class="navbar nav_title" style="border: 0;">
              <a href="{{ URL::to('/') }}/Adminuser" class="site_title"><i class="fa fa-paw"></i> <span>Car Rental</span></a>
            </div>

            <div class="clearfix"></div>

<div class="profile clearfix">
              <div class="profile_pic">
                                     @php
                            if(!empty(Auth::user()->image)){ @endphp
         <img src="{{ URL::to('images/'. Auth::user()->image) }}" alt="..." class="img-circle profile_img">
                         @php }
                     
                        
                      else { @endphp
                        <img src="{{URL::to('public/images/vv.png')}}" alt="..." class="img-circle profile_img" > 
                   @php  } @endphp
                
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>@php
                    if(!empty(Auth::user()->name)) { @endphp
                                 <span>{{ Auth::user()->name }}</span>
                                 @php } 
                                 else { @endphp
                                    no name
                              @php } @endphp </h2>
              </div>
            </div>