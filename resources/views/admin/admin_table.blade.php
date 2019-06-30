  @extends("admin.layout.adminmain")
  


   @section("title","Admin | user section")

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
                <h3>ADMIN<small></small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
             

             @php
               if(!empty(Auth::User())){ @endphp


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
               <a href="{{ url('Adminuser/create') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i><small>ADD ADMIN</small></a>
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
                          <th>phone_number</th>
                         <!--  <th>webside_url</th> -->
                         <!--  <th>position</th> -->
                          <th>type</th>
                          <th>Created Date</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($userdata as $show)  
                        <tr>
                          <td>{{ $show->name  }}</td>
                          <td>{{ $show->email }}</td>
                          <td>{{ $show->phone_number  }}</td>
                     <!--      <td>{{ $show->webside_url }}</td> -->
                        <!--   <td>{{ $show->position }}</td> -->
                          <td>{{ $show->type }}</td>

                          <td>{{ $show->created_at }}</td>

                          <td>
                            @php
                            if(!empty($show->image)){ @endphp
                 <img src="{{ URL::to('images/'. $show->image) }}"/ style="width:80px;height: 60px;">
                         @php }
                     
                        
                      else { @endphp
                        <img src="{{URL::to('public/images/vv.png')}}" style="width: 90px;
                                                    height: 80px;
                                                    text-align: center;
                                                    margin: 0 auto;
                                                    float: none;
                                                    display: list-item;"> 
                   @php  } @endphp
                         

                          
                            </td>
                           
                          <td>
                            <!--<a href="Adminuser/{{$show->id}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                            <a href="Adminuser/{{$show->id}}/edit " class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <form action="{{ URL::to('/') }}/Adminuser/{{$show->id}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" name="submit" value="Delete"  class="btn btn-danger btn-xs" style="position: absolute;
    margin: -28px 52px;">
                            </form>
                            <a href="Adminuser/{{$show->id}}/changePassword" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>Change password</a>

                           
                       
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
   