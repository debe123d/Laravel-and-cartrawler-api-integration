 @extends("admin.layout.adminmain")
  


   @section("title","Admin | Add Manu")

   @section("body")
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            

            <!-- menu profile quick info -->
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

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mail Replay<small></small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
             
                  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
        
            
           <!--     @if(session()->has("theMassage"))

                 <span style="color:green;padding: 291px;">{{ session()->get("theMassage") }}</span>
          @endif -->
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
                  <div class="x_content">

           <form class="" enctype="multipart/form-data" action="{{ URL::to ('/')}}/contact/{{$emaili->id}}/email" method="post" novalidate>
                {{ csrf_field() }}
          

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">EMAIL<span class="required" style="color:red;">*</span>

                        </label>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding: 4px 16px;">
                          <input id="manu_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value="{{ $emaili->email }}" name="email" placeholder="Add manu(s) e.g Home...About us" required="required" type="email">
                         <!--  <input type="hidden" name="manu_name" value="car_rental"> -->
            

                        </div>
                      </div>


             <div class="item form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" for="textarea">Reply SMS<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="position: relative;
    margin: 1px 264px;">
                          <textarea id="textarea" required="required" name="address" class="form-control col-md-7 col-xs-12" style="margin: 0px; width: 485px; height: 94px;"></textarea>
                        </div>
       

                      </div> 
                  
                     
         
          
                     
               
          
        
             
                      <div class="ln_solid"></div>
                      <div class="form-group" style="text-align: -webkit-center;">
                        <div class="col-md-6 col-md-offset-3" style="padding: 10px;">
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
        <!-- /page content -->

        <!-- footer content -->
   
        <!-- /footer content -->
      </div>
    </div>

    </script>
    
  @endsection
   