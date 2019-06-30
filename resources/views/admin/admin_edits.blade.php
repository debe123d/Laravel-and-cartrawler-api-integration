
  @extends("admin.layout.adminmain")
  


   @section("title","Admin | user Edits")

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
                <h2>This Form used for Admin  Edits your Details</h2>
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

           <form class="form-horizontal form-label-left"  enctype="multipart/form-data" action="{{ URL::to('/')}}/Adminuser/{{$edit->id}}" method="post" novalidate>
                  {{ csrf_field() }}
                {{ method_field('PUT') }}
          
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="name">Name <span class="required" style="color:red;">*</span>

                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" value="{{$edit->name}}" required="required" type="text">
         @if($errors ->has("name"))  <span style="color:red;">{{ $errors->first("name")}}</span> @endif       
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" value="{{$edit->email}}" name="email" required="required" class="form-control col-md-7 col-xs-12" readonly="">
        @if($errors ->has("email"))  <span style="color:red;">{{ $errors->first("email")}}</span> @endif     
                        </div>
                      </div>
                    <!--   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email2" value="{{$edit->email}}" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
     @if($errors ->has("confirm_email"))  <span style="color:red;">{{ $errors->first("confirm_email")}}</span> @endif  
                        </div>
                      </div> -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">phone Number <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" value="{{$edit->phone_number}}" name="phone_number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
  @if($errors ->has("phone_number"))  <span style="color:red;">{{ $errors->first("phone_number")}}</span> @endif
                        </div>
                      </div>
                   <!--    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website URL                         </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="url" value="{{$edit->webside_url}}" id="website" name="webside_url" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->
                <!--       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="position">position <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="position" value="{{$edit->position}}" type="text" name="position" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
   @if($errors ->has("position"))  <span style="color:red;">{{ $errors->first("position")}}</span> @endif
                        </div>
                      </div>
                      -->
              
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Type <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="type"  style="width: 100%; padding: 8px 4px; background: none" >

                    
  <option name="type" value="Admin" @if($edit->type == 'Admin') selected @endif>Admin</option> 

                 <!--           	<option name="type" value="User" @if($edit->type == 'User')-->
                 <!--selected -->
                 <!-- @endif>User</option>-->
                 <!--           	<option name="type" value="Customer" @if($edit->type == 'Customer')-->
                 <!--selected -->
                 <!-- @endif>Customer</option>-->

                            </select>
                        </div>
        @if($errors ->has("type"))  <span style="color:red;">{{ $errors->first("type")}}</span> @endif
                      </div>
           <!--            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Address <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="address" class="form-control col-md-7 col-xs-12">{{$edit->address}}</textarea>
                        </div>
    @if($errors ->has("address"))  <span style="color:red;">{{ $errors->first("address")}}</span> @endif
                      </div> -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">your image <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" value="" id="image" name="image" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
           @if($errors ->has("image"))  <span style="color:red;">{{ $errors->first("image")}}</span> @endif
                        </div>
                      </div>
                      <div>
                        
                            @php
                            if(!empty($edit->image)){ @endphp
          <img src="{{ URL::to('images/'. $edit->image) }}"/ style="width:80px;height: 60px;
          margin: 0 auto;
                                                    float: none;
                                                    display: list-item;">
                         @php }
                     
                        
                      else { @endphp
                        <img src="{{URL::to('public/images/vv.png')}}" style="width: 90px;
                                                    height: 80px;
                                                    text-align: center;
                                                    margin: 0 auto;
                                                    float: none;
                                                    display: list-item;"> 
                   @php  } @endphp



                      </div>
             
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" value="reset" class="btn btn-primary">Cancel</button>
              <button id="send" type="submit" name="submit" class="btn btn-success">Submit</button>
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


  @endsection
