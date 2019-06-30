
  @extends("admin.layout.adminmain")
  


   @section("title","Admin | user Create")

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
                <h2>This form used for Admin Registration </h2>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
             <a href="{{ url('Adminuser') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i><small><--Back</small></a>
               @if(session()->has("thisMassage"))

                 <span style="color:green;padding: 291px;">{{ session()->get("thisMassage") }}</span>
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

           <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="{{URL::to('/')}}/Adminuser" method="post" novalidate>
                {{ csrf_field() }}
          
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required" style="color:red;">*</span>

                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value="{{ old('name') }}" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
         @if($errors ->has("name"))  <span style="color:red;">{{ $errors->first("name")}}</span> @endif       
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" value="{{ old('email') }}"  name="email" required="required" class="form-control col-md-7 col-xs-12">
        @if($errors ->has("email"))  <span style="color:red;">{{ $errors->first("email")}}</span> @endif     
                        </div>
                      </div>
                  <!--     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email2" value="{{ old('confirm_email') }}" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
     @if($errors ->has("confirm_email"))  <span style="color:red;">{{ $errors->first("confirm_email")}}</span> @endif  
                        </div>
                      </div> -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">phone Number <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" value="{{ old('phone_number') }}" id="number" name="phone_number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
  @if($errors ->has("phone_number"))  <span style="color:red;">{{ $errors->first("phone_number")}}</span> @endif
                        </div>
                      </div>
                   <!--    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website URL                         </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="url" id="website" name="webside_url" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->
                    <!--   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">position <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="occupation" value="{{ old('position') }}" type="text" name="position" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
   @if($errors ->has("position"))  <span style="color:red;">{{ $errors->first("position")}}</span> @endif
                        </div>
                      </div> -->
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password
                        <span class="required" style="color:red;">*</span></label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="pwd" value="{{ old('password') }}" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">

                          <button type="button" id="eye" style="position: absolute;
    padding: 5px 1px; right: 5px;">
    <img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye" />
     </button>
   @if($errors ->has("password"))  <span style="color:red;">{{ $errors->first("password")}}</span> @endif
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password <span class="required" style="color:red;">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" value="{{ old('confirm_password') }}" type="password" name="confirm_password" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
 @if($errors ->has("confirm_password"))  <span style="color:red;">{{ $errors->first("confirm_password")}}</span> @endif
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Type <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="type" style="width: 100%; padding: 8px 4px; background: none" >
                              <option  value="">Select Type</option>
                            	<option  value="Admin">Admin</option> 
                            
                            </select>
                             @if($errors ->has("type"))  <span style="color:red;">{{ $errors->first("type")}}</span> @endif
                        </div>
       
                      </div>
                    <!--   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Address <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="address" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
    @if($errors ->has("address"))  <span style="color:red;">{{ $errors->first("address")}}</span> @endif
                      </div> -->
          <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">your image <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" value="" id="image" name="image" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
 
                        </div>
                      </div>
              <input type="hidden" name="status" value="1">
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
