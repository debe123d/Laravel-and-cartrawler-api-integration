
  @extends("admin.layout.adminmain")
 
   @section("title","Admin | user details")

   @section("body")
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
             @include("admin.profile")
            <!-- /menu profile quick info -->

            <br/>

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
                <h2>All the details </h2>
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
             <a href="{{ url('Adminuser') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i><small><--Back</small></a><span style="color:red;padding: 237px;">This page is for viewing propose you Con't modified and one of data</span>
              

           
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
       

                   

          

           <form class="form-horizontal form-label-left" action="" method="" novalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name 

                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" value="{{$data->name}}" readonly=""  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name"
                          placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                 </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" value="{{$data->email}}" readonly="" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
           
                        </div>
                      </div>
                     <!--  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email2" value="{{$data->email}}" readonly=""  name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
    
                        </div>
                      </div> -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="number">phone Number 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" value="{{$data->phone_number}}" readonly=""  id="number" name="phone_number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>
                 <!--      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website URL                         </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="url" id="website" value="{{$data->webside_url}}" readonly=""  name="webside_url" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->
                    <!--   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">position 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="occupation" value="{{$data->position}}"  readonly=""  type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
  
                        </div>
                      </div> -->
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" value="{{$data->password}}" readonly=""  type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" value="{{$data->password}}" readonly=""  type="password" name="confirm_password" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Type 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="type" readonly=""  style="width: 100%; padding: 8px 4px; background: none" >
                              <option name="type" value="Admin" readonly="">{{$data->type}}</option>
                            

                            </select>
                        </div>
      
                      </div>
                      <div>
                        @php
                        if(!empty($data->image)){ @endphp
                         <img src="{{URL::to('images/'. $data->image)}}" style="width: 80px;
                                                    height: 60px;
                                                    text-align: center;
                                                    margin: 0 auto;
                                                    float: none;
                                                    display: list-item;"> 
                       @php } else { @endphp

                          <img src="{{URL::to('public/images/vv.png')}}" style="width: 90px;
                                                    height: 80px;
                                                    text-align: center;
                                                    margin: 0 auto;
                                                    float: none;
                                                    display: list-item;"> 
                     @php } @endphp
                      </div>

                      
                   <!--    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Address 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" readonly=""  name="address" class="form-control col-md-7 col-xs-12">{{$data->address}} </textarea>
                        </div>
   
                      </div> -->
             <!--  <input type="hidden" name="status" value="1"> -->
                      <div class="ln_solid"></div>
                   
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
