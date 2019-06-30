@extends("Car_rental.layout.body")

@section("body")
<section class="Rental-Locations">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-12 col-md-12">
        <h1>Best Car Rental Locations</h1>
      </div>
      <div class="col-sm-12 col-lg-12 col-md-12">
        <h2><i class="fas fa-map-marker-alt"></i>Top car rental places</h2>
      </div>

<div class="col-sm-4 col-lg-4 col-md-4">
                <div class="wrapper wrapper1"  id="wrapper">
    <div class="wrapper-box">
  <p class="click-text">
    Alicante Airport (ALC) <span class="arrow"></span>
  </p>
  <ul>
    <li>Alicante</li>
    <li>Alicante</li>
    <li>Alicante</li>
  </ul>  
  </div>
</div>
</div>
<div class="col-sm-4 col-lg-4 col-md-4">
                <div class="wrapper wrapper1"  id="wrapper2">
    <div class="wrapper-box">
  <p class="click-text">
    Alicante Airport (ALC) <span class="arrow"></span>
  </p>
  <ul>
    <li>Alicante</li>
    <li>Alicante</li>
    <li>Alicante</li>
  </ul>  
  </div>
</div>
</div>
<div class="col-sm-4 col-lg-4 col-md-4">
                <div class="wrapper wrapper1"  id="wrapper3">
    <div class="wrapper-box">
  <p class="click-text">
    Alicante Airport (ALC) <span class="arrow"></span>
  </p>
  <ul>
    <li>Alicante</li>
    <li>Alicante</li>
    <li>Alicante</li>
  </ul>  
  </div>
</div>
</div>

      
      
      
      
    </div>
  </div>
</section>
<section class="hot-deals">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-12 col-md-12">
        <h1>Today’s Hot Deals</h1>
      </div>
      <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="hot-deals-left">
<div class="hot-deals-box">
  <img src="{{ URL::to('public/front/images/hot-deals-1.png') }}">
  <h5>10-20% Off New Zealand Car Cental</h5>
  <h6>Save 10-20% on rental cars</h6>
  <p>Expiration Date: 2019-03-31</p>
</div>
</div>
<div class="hot-deals-right">
          <div class="row">
      <div class="col-sm-6 col-lg-6 col-md-6">
        <div class="hot-deals-right-box">
          <img src="{{ URL::to('public/front/images/img2.jpg') }}">
  <h5>10-20% Off New Zealand Car Cental</h5>
  <p>Expiration Date: 2019-03-31</p>
        </div>
        <div class="hot-deals-right-box">
          <img src="{{ URL::to('public/front/images/img2.jpg') }}">
  <h5>10-20% Off New Zealand Car Cental</h5>
  <p>Expiration Date: 2019-03-31</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-6 col-md-6">
        <div class="hot-deals-right-box">
          <img src="{{ URL::to('public/front/images/img2.jpg') }}">
  <h5>10-20% Off New Zealand Car Cental</h5>
  <p>Expiration Date: 2019-03-31</p>
        </div>
        <div class="hot-deals-right-box">
          <img src="{{ URL::to('public/front/images/img2.jpg') }}">
  <h5>10-20% Off New Zealand Car Cental</h5>
  <p>Expiration Date: 2019-03-31</p>
        </div>
      </div>
      
    </div>
    
        </div>
      </div>
      
    </div>
  </div>
</section>

<section class="booking">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-12 col-md-12">
<div class="booking-box">
        <h2>Best Car Rental <span>Deals</span></h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="booking-button"><a href="#">Booking Now</a></div>
</div>
      </div>
    </div>
  </div>
</section>
@endsection