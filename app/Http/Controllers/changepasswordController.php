<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Hash;

class changepasswordController extends Controller
{
    public function changePassword($id){

    	$data= User::find($id);
    	
    return view("admin.admin_changepassword",compact("data"));

    }

    public function change(Request $request, $id){
          
         $data=User::find($id); 

        

          if(Hash::check($request->current_password, $data->password))
          {
             $show= Validator::make($request->all(),
             	[
                      "current_password" => "required",
                     "new_password" => "required|min:5",
                   "confirm_password" => "required|same:new_password"
             	 ],
             	[
             		"current_password.required" => "Please enter your current password",
             		"new_password.required" => "Please enter your new password",
                "new_password.min" => "Please enter your password minimum 5 character ",
             		"confirm_password.required" => "please enter your current password",
             		"confirm_password.same" => "please check and enter same password"

             	 ])->validate();
            
             $data->password=Hash::make($request->new_password);
          	  $is_save=$data->save();

          	  if($is_save){

   return redirect("Adminuser/".$id."/changePassword")->with('statuss', 'New password is Update successfully');
          	        }

          }
          else{

   return redirect("Adminuser/".$id."/changePassword")->with('status', 'please chack your password');

          }

             

     }
}
