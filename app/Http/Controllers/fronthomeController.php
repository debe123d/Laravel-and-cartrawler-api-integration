<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fronthomeController extends Controller
{
      public function  car()
      {
         return view("Car_rental.index");
      }

      public function contact()
      {
         return view("Car_rental.contact");
      }
      public function search()
      {
       return view("Car_rental.search");
      }
       public function contactdata(Request $request)
      {
          
         $data = Validator::make($request->all(),
            [
                "name" => "required",
                "email" => "required|email|unique:users",
                // "confirm_email" => "required|same:email|email",
                "subject" => "required"
             
                 // "address" => "required"
            ],
            [
                "name.required" => "Enter Your name",
                "email.required" => "Enter Your email",
                "email.email"=>"Enter you validate email address",
                  "email.unique" => "This email id allready exited",
                    "subject.unique" => "This email id allready exited"
                
                
                      ])->validate();
          

            
               $obj = new Contact;
               $obj->name = $request->name;
               $obj->email = $request->email;
               $obj->subject = $request->subject;
             
                $is_save =$obj->save();

        if($is_save){
                session()->flash("thisMassage","your Ragistation is done thank you");
                return redirect("/car_rental/contact");
        } else
        {
             session()->flash("thisMassage","your Ragistation not done please try another time");   
            return redirect("/car_rental/contact");
        }
    

      }
}
