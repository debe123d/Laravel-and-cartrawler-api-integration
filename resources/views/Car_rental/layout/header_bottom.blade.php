<section class="header-bottom">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12 col-md-12">
				<div class="menu-list menubar">
					<label for="menu-toggle"><p><img src="{{ URL::to('/') }}/public/front/images/menu-toggle.png" alt=""></p></label>
<input type="checkbox" id="menu-toggle"/>
				<ul id="menu">
					@foreach(App\addpage::orderBy('id','asc')->where(['status'=>1])->get()->take(5) as $menuItem)
					<li><a href="{{ URL::to('/') }}/car_rental/{{ $menuItem->manu_id }}">{{ $menuItem->manu_id }}</a></li>
                    @endforeach
					<li><a href="#">Deals</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Locations</a></li>
					<li><a href="{{ URL::to('/car_rental/contact') }}">Contact</a></li>
					</ul>
					</div>
	</div>
</div>
</div>
</section>