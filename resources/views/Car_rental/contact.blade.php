@extends("Car_rental.layout.body")

@section("body")
<section class="contact-page">
 <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="contact-page-left">
          <h1>Address</h1>
           @if(session()->has("thisMassage"))

                 <span style="color:green;padding: 291px;">{{ session()->get("thisMassage") }}</span>
          @endif
                 
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <form action="{{ URL::to('/') }}/cartwala/car_rental/contact" method="post">
            {{ csrf_field() }}

            <label for="fname">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
     @if($errors ->has("name"))  <span style="color:red;">{{ $errors->first("name")}}</span> @endif
         <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Your email">
         @if($errors ->has("email"))  <span style="color:red;">{{ $errors->first("email")}}</span> @endif
        <label for="subject">Message :</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
       @if($errors ->has("subject"))  <span style="color:red;">{{ $errors->first("subject")}}</span> @endif
    <input type="submit" value="Submit">
          </form>
        </div>
         <div class="contact-page-right">
          <div class="map-part">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.961801214556!2d-74.00418248509462!3d40.74086604378691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1551531471615" width="520" height="460" frameborder="0" style="border:0" allowfullscreen></iframe></div>

       <ul>
         <li>Address  :<span>Usa</span></li>
         <li>Phone  :<span>05263595412</span></li>
         <li>City  :<span>Usa</span></li>
         <li>Email  :<span>info@carrental.com</span></li>
         <li>Check In  :<span>11:00:AM</span></li>
         <li>Check Out  :<span>11:00:PM</span></li>

       </ul>
         </div>
      </div>
      </div>
      </div> 
</section>
@endsection