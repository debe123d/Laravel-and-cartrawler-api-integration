  @extends("admin.layout.adminmain")
  


   @section("title","Admin | User Contact listing")

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
                <h3>Contact<small></small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
             

             @php
               if(!empty(Auth::User())){ @endphp


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
                    <p class="text-muted font-13 m-b-30">
                  
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>name</th>
                          <th>email</th>
                          <th>Subject</th>
                         <!--  <th>webside_url</th> -->
                         <!--  <th>position</th> -->
                       
                          <th>Created Date</th>
                        
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($userdata as $show)  
                        <tr>
                          <td>{{ $show->name  }}</td>
                          <td>{{ $show->email }}</td>
                          <td>{{ $show->subject  }}</td>
                     <!--      <td>{{ $show->webside_url }}</td> -->
                        <!--   <td>{{ $show->position }}</td> -->
         

                          <td>{{ $show->created_at }}</td>

           
                           
                          <td>
                          
                            
                        <a href="{{ URL::to('/') }}/contact/{{ $show->id }}/email" style="float:left;" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Replay </a>        
                            <form action="{{ URL::to('/') }}\contact\{{$show->id}}" method="post" style="float: left;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" name="submit" value="Delete"  class="btn btn-danger btn-xs">
                            </form>
                         

                           
                       
                          </td>
                        </tr>
                        @endforeach
                     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          @php  }
           else
           {
           @endphp
         <div class="col-md-12 col-sm-12 col-xs-12">
          <div  class="x_panel">
          <p style="color: red"> You are not access this page Without login </p> 
          </div>
       
         </div>
        @php  } @endphp

             

            

              
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
   
        <!-- /footer content -->
      </div>
    </div>
    
  @endsection
   