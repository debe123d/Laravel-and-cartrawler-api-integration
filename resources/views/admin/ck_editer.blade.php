

	 

  @extends("admin.layout.adminmain")
  


   @section("title","Admin | Edit's Manu Name")

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
                <h2>This is editer page </h2>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
             
               @if(session()->has("thisMassage"))

                 <span style="color:green;padding: 291px;">{{ session()->get("thisMassage") }}</span>
          @endif
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                       
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                <form action="{{ URL::to ('add_page') }}" method="post" enctype="multipart/form-data">

                	{{ csrf_field() }}
           


<div class="row">
                      <div class="item form-group" style="float: left; width: 100%;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style=" padding-top: 9px;" for="name">SEO URL name<span class="required" style="color:red;">*</span>

                        </label>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding: 4px 16px;">
                          <input id="manu_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value="{{ old('manu_name') }}" name="manu_id" placeholder="Add manu(s) e.g Home...About us" required="required" type="text">
                         <!--  <input type="hidden" name="manu_name" value="car_rental"> -->
             @if($errors ->has("manu_id"))  <span style="color:red;">{{ $errors->first("manu_id")}}</span> @endif       
                        </div>
                      </div>
                      </div>
                      
                  <div class="row">
                	<textarea id="editor1" class="ckeditor" name="editor1"></textarea> 
                	   @if($errors ->has("editor1"))  <span style="color:red;">{{ $errors->first("editor1")}}</span> @endif

                 </div>
                   <div class="form-group" style="text-align: -webkit-center;">
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




   
        <!-- /footer content -->
      </div>
    </div>

<script type="text/javascript">  
     CKEDITOR.replace( 'editor1' );  
  </script> 

  @endsection


