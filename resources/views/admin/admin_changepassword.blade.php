
  @extends("admin.layout.adminmain")
  


   @section("title","Admin | Password change")

   @section("body")
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            @include("admin.profile")
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
  
         @include("admin.sidebar")

   
      
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
     @php
       @include_once("admin.navigation")
     @endphp
        <!-- /top navigation -->
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h2>This form is Admin for Password change</h2>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
             <a href="{{ url('Adminuser') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i><small><--Back</small></a>
             @if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
           @if (session('statuss'))
    <div class="alert alert-success">
        {{ session('statuss') }}
    </div>
@endif
              
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

<form class="form-horizontal form-label-left" action="{{ URL::to('/') }}/Adminuser/{{$data->id}}/changePassword" method="post" novalidate>

                {{ csrf_field() }}
                {{ method_field("PUT") }}

                    <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Current Password
                        <span class="required" style="color:red;">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="current_password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
      
   @if($errors ->has("current_password"))  <span style="color:red;">{{ $errors->first("current_password")}}</span> @endif
                        </div>
                      </div>
          
             <div class="item form-group">
                        <label for="password" class="control-label col-md-3">New Password
                        <span class="required" style="color:red;">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pwd" type="password" name="new_password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                          <button type="button" id="eye" style="position: absolute;
    padding: 5px 1px; right: 5px;">
    <img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye" />
</button>
   @if($errors ->has("new_password"))  <span style="color:red;">{{ $errors->first("new_password")}}</span> @endif
                        </div>
                      </div>
                
         
                  
              

                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password <span class="required" style="color:red;">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="confirm_password" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
 @if($errors ->has("confirm_password"))  <span style="color:red;">{{ $errors->first("confirm_password")}}</span> @endif
                        </div>
                      </div>
          
                 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" value="reset" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




   
        <!-- /footer content -->
      </div>
    </div>

    <script type="text/javascript">
      function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
   }, false);

    </script>

  @endsection
