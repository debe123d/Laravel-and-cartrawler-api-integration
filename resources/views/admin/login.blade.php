<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OUR | LOGIN </title>

    <!-- Bootstrap -->
  <link href="{{ URL::to('public/..vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::to('public/..vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::to('public/..vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ URl::to('public/..vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ URL::to('public/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
          
        <div class="animate form login_form">
          <section class="login_content">
        
              <h1>Login Form</h1>
               @if(session()->has("thisMassage"))

                 <span style="color:red;">{{ session()->get("thisMassage") }}</span>
          @endif
            
           <form action="{{ URL::to('/') }}/admin" method="post">
            {{ csrf_field() }}
              <div>
                <input type="email" class="form-control" name="email" placeholder="Username"  />
    
    @if($errors ->has("email"))  <span style="color:red;">{{ $errors->first("email")}}</span> @endif            
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" />
                @if($errors ->has("password"))  <span style="color:red;">{{ $errors->first("password")}}</span> @endif 
              </div>

              <div>
             <button type="submit"  name="submit"  class="btn btn-outline-success">login</button> </a>
             

                
              </div>


            </form>
           
          
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">login</a>
              </div>

              <div class="clearfix"></div>

           
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
