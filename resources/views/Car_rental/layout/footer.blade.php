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
	<script type="text/javascript">
		 $(document).ready( function () {
		 	$('.drop-label').click( function () {
		 		$('.drop-fild').toggle();
		 	})
		 })
	</script>
    <script>
	$('.timepicker1').timepicki();
    </script>
<script  src="{{ URL::to('public/front/js/calender.js') }}"></script>
<script  src="{{ URL::to('public/front/js/index.js') }}"></script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script type="text/javascript">
(function() {
  CT.ABE.Settings.version = '4.0';
  var cts = document.createElement('script'); cts.type = 'text/javascript'; cts.async = true;
  cts.src = '//ajaxgeo.cartrawler.com/abe' + CT.ABE.Settings.version + '/ct_loader.js?' + new Date().getTime();
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(cts, s);
})();
</script>
