<!DOCTYPE html>
<html>
  <head>
      
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CarTrawler - AJAX Booking Engine</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ URL::to('public/front/css/style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::to('public/front/css/listing.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::to('public/front/css/callender.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::to('public/front/css/callender-ui.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::to('public/front/css/timepicki.css') }}" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
<script src="{{ URL::to('public/front/js/timepicki.js') }} "></script>
<script src="{{ URL::to('public/front/js/bootstrap.min.js') }}"></script>
 <script type="text/javascript">
    var CT = {
      ABE: {
        Settings: {
          clientID: '[156716]'
        }
      }
    };
    </script>
  </head>
  <body>	
        
     
    @include("Car_rental.layout.header_top")
    @include("Car_rental.layout.header_bottom")
      <div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-12 col-xl-12">
    <div id="abe_ABE"><noscript>YOUR BROWSER DOES NOT SUPPORT JAVASCRIPT</noscript></div>
  </div>
</div>
</div>
   

<div class="footer">
	<div class="container">
		<div class="row">
	<div class="col-sm-4 col-lg-4 col-md-4">
				<h3>About Us</h3>
				 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
			</div>
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="footer-middle">
         <h3>Useful Links</h3>
         <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Packages</a></li>
            <li><a href="#">Popular Destination</a></li>
            <li><a href="#">Latest News</a></li>
            <li><a href="#">Our Gallery</a></li>
            <li><a href="#">Contact Us</a></li>
         </ul>
    </div>
			</div>
		<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="footer-middle2">
         <h3>Socail Network</h3>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Top Destination</a></li>
            <li><a href="#">Google Plus</a></li>
         </ul>
    </div>
			</div>

		</div>
	</div>
</div>
<div class="footer-last">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12 col-md-12">
				Copyright© 2019 Microfinet
			</div>
		</div>
	</div>
</div>

   
<script  src="{{ URL::to('public/front/js/calender.js') }}"></script>
<script  src="{{ URL::to('public/front/js/index.js') }}"></script>
    <script>
    (function() {
      CT.ABE.Settings.version = '4.0';
      var cts = document.createElement('script'); cts.type = 'text/javascript'; cts.async = true;
      cts.src = '//ajaxgeo.cartrawler.com/abe' + CT.ABE.Settings.version + '/ct_loader.js?' + new Date().getTime();
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(cts, s);
    })();
    </script>
    
  </body>
</html>  
   

<body>
	



