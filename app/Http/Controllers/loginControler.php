<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
Use Auth;
Use Hash;
Use Validator;
class loginControler extends Controller
{
     public function loginshow()
     {
       return view("admin.login");
     }

     public function singin(Request $request)
     {

     	  $data =Validator::make($request->all(),
     	  	[
     	      "email"=>"required|email",
     	      "password"=>"required"
     	  	],
     	  	[
     	  	"email.required"=>"Enter Your email id",
     	  	"email.email"=>"Enter Your validate email",
     	  	"password.required"=>"Enter password Your email id",	
     	  	])->validate();

          if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

             if(empty(Auth::User())){
            return redirect("/admin")->with("thisMassage","You are Invaled user "); 
             }
              
           return redirect("/Adminuser")->with("thisMassage","You are successfully login");
              
          }else{
          return redirect("/admin")->with("thisMassage","You are Invaled user");
          }
      

     }
     public function logoutuser()
     {
            Auth::logout();
          return redirect("/admin")->with("thisMassage","You are successfully logout");
     }
     
     public function  search_car(){
         return view("Car_rental/search_car");
     }
     
    
}
