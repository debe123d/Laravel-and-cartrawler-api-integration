<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\addpage; 

use App\addmanu;


class PageController extends Controller{

	public function getPage($slug){

      
       if( 'contact' == $slug)
         {
       	  return view("Car_rental.contact");
         }
         elseif( $userr = addpage::where(['manu_id'=>$slug,'status'=>1])->get()->first())
         {
         	  //->take(5);
         	 return view ("Car_rental.page")->with(array('user' => $userr));
         	}
        //(!$userr)
         else {
         return view("Car_rental.index");
          }


	

         }
		       
	 

	     }
         

   

?>