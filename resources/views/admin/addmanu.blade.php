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
                <h3>Add Manu<small>section</small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
             

             @php
               if(!empty(Auth::User())){ @endphp


                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
               <!--<a href="{{ URL::to('create_manu') }}  " class="btn btn-primary btn-xs"><i class="fa fa-folder"></i><small>ADD Manu++</small></a>-->
               @if(session()->has("theMassage"))

                 <span style="color:green;padding: 291px;">{{ session()->get("theMassage") }}</span>
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
                          <th>SEO name</th>
                          <th>Page name</th>
                  
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                   @foreach($manu as $manu_name)
                        <tr>
                     
                  
                        
                          <td>{{ $manu_name->manu_id  }}</td>
                           <td>{{ $manu_name->manu_id }} page</td>
                   <!--       <td>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="type" id="type" style="width: 100%; padding: 8px 4px; background: none" >
                            
                              <option id="admin" value="Admin">Active</option> 
                              <option  id="disable" value="Disable">Disable</option>
                             

                       </select>
                             @if($errors ->has("type"))  <span style="color:red;">{{ $errors->first("type")}}</span> @endif
                        </div>
                         </td>
                     -->

                   
                          <td>
                         
                            <a href="{{ URL::to('/') }}/create_manu/{{ $manu_name->id }}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                  
                  @if($manu_name->status == 1)
          <a href="{{ URL::to('/') }}/status-update/{{ $manu_name->id }}/0/status/addpages/addmanu" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> active </a>
                  @else 
            <a href="{{ URL::to('/') }}/status-update/{{ $manu_name->id }}/1/status/addpages/addmanu" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> disable </a>
                
                 @endif
               

                            <form action="{{ URL::to('/') }}/create_manu/{{ $manu_name->id }}" method="post">
                             {{ csrf_field() }}
                             {{ method_field("DELETE") }}                           
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

    </script>
    
  @endsection
   