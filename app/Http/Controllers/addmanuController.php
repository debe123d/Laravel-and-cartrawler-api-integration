<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addmanu;
use Validator;
use App\addpage;

class addmanuController extends Controller
{
   public function addmanu()
         {

        $manue = addpage::OrderBy("id","desc")->get();
       
     return view("admin.addmanu")->with(array('manu'=>$manue));
          }


   public function createmanu()
      {
    return view ("admin.addmanu_create");
      } 

   public function  storemanu(Request $request)
    {
      
            $data = Validator::make($request->all(),
            [
               "manu_name"=>"required|unique:addmanus"
            ],
            [
               "manu_name.required"=> "Enter your SEO name",
               "manu_name.unique"=>"The SEO name is allready added"
            ])->validate();

             $obj = new addmanu;
             $obj->manu_name = $request->manu_name;

             $is_save = $obj->save();
       
        if($is_save){
                
              session()->flash("theMassage","The SEO name is add");  
                return redirect("create_manu");  

                   }
          else
            {
              
                session()->flash("theMassage","The SEO name is not add please try agan");  
                return redirect("create_manu");
           }

      }

       public function delete_manu($id)
       {
           $manu = addpage::find($id);

           //dd($delete);
    
            $is_delete = $manu->delete();
            //$is_delete = $delete->delete();

            if($is_delete)
            {
              session()->flash("theMassage","The manu name Deleted");
                return redirect("addmanu");
            }else{
              session()->flash("theMassage","The manu name is not delete please try once more");
              return redirect("addmanu");
           }
   
       }

        public function edit($id)
         {
             $views = addpage::find($id);
           //  dd($views);
             return view ("admin.add_manu_edit")->with(array('data' =>$views));
         }
  
     public function edit_manu(Request $request ,$id)
     {

           $date = Validator::make($request->all(),
           [
                "manu_id" => "required",
                "editor1" => "required"
           ],
           [
                "manu_id.required" => "palase fillup your seo link",
               
                "editor1.required" => "desing your page"
           ]
        )->validate();
      
           $update = addpage::find($id);

          $update->manu_id = $request->manu_id;
          $update->add_page = $request->editor1;
          $update->status= $request->status;

             $is_save = $update->save();

            if($is_save){
                  session()->flash("theMassage","The manu is update");

                  return redirect("/add_page/".$id."/edit");
                        }
               else
                      {
              session()->flash("theMassage","The manu is not update");
                  return redirect("/add_page/".$id."/edit");
                        }
     }


     // public function done()
     // {
     //    $arr=array ('I','am','simple','boy!');  
     //     echo implode(" ",$arr);
   
   
     //     $str="I am simple boy";  
     //     print_r(explode(" ",$str)); 

     // }


     public function active($id,$status,$column,$table,$page)
     {
            
            $data = addpage::where("id",$id)->update([$column => $status]);
           if($data){
          session()->flash("theMassage","status is update");   
               return redirect("/$page"); 
           }
           else{

                session()->flash("theMassage","status not update");  
                 return redirect("/$page");
           }
            
           
     }

     public function menu()
     {
         $views= addpage::OrderBy('id','desc')->get();
          // dd($views);

         return view("Car_rental.layout.header_bottom", compact('views'));

     }
}
