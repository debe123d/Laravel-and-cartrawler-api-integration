<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Hash;
use App\contact;
use App\addpage;
use Mail;

class AdminuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
          $userdata= User::OrderBy("id","desc")->get();

        return view("admin.admin_table", compact("userdata"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.admin_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $data = Validator::make($request->all(),
            [
                "name" => "required",
                "email" => "required|email|unique:users",
                // "confirm_email" => "required|same:email|email",
                "phone_number" => "required|min:9|max:10",
                // "position" => "required",
                "password" => "required|min:5",
                "confirm_password" => "required|same:password",
                 "type" => "required",
                 // "address" => "required"
            ],
            [
                "name.required" => "Enter Your name",
                "email.required" => "Enter Your email",
                "email.email"=>"Enter you validate email address",
                  "email.unique" => "This email id allready exited",
                // "confirm_email.required" => "Please chack your confirm_email",
                "phone_number.required" => "Enter your Phone number",
                 "phone_number.min" => "Enter your Phone number atlist 9 number",
                 "phone_number.max" => "Enter your Phone number  no more then 10 number",
                 // "position.required" => "Enter your position",
                 "password.required" => "Enter your password",
                 "password.min" => "Enter your password minimum 5 character ",
                  "confirm_password.required" => "please check your confirm_password",
                  "type.required" => "please select your type",
                  // "address.required" => "please Enter your address ",
                      ])->validate();
                      
            $file = $request->file("image");

            if($request->hasFile("image")){
                $file->move("images/",$file->getClientOriginalName());
            }

               $obj = new User;
               $obj->name = $request->name;
               $obj->email = $request->email;
               $obj->phone_number = $request->phone_number;
               // $obj->webside_url = $request->webside_url;
               // $obj->position = $request->position;
               $obj->image = $file->getClientOriginalName();

               $obj->password = Hash::make($request->password);
               $obj->type = $request->type;
               // $obj->address = $request->address;
               $obj->un_id = str_random(16);
               $obj->qstr = str_random(16);
                $obj->remember_token =  $request->_token;
               $obj->status =$request->status;
                $is_save =$obj->save();

        if($is_save){
                session()->flash("thisMassage","your Ragistation is done thank you");
                return redirect("/Adminuser/create");
        } else
        {
             session()->flash("thisMassage","your Ragistation not done please try another time");   
            return redirect("/Adminuser/create");
        }
    

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);

       // print_r($data);
       // exit;
       return view("admin.adminshow", compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= User::find($id);

       // print_r($edit);
       // exit;
        return view("admin.admin_edits", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $data = Validator::make($request->all(),
            [
                "name" => "required",
                "image" => "required",
                "email" => "required|email",
                // "confirm_email" => "required|same:email|",
                "phone_number" => "required|min:9|max:10",
                // "position" => "required",
                 "type" => "required",
                
            ],
            [
                "name.required" => "Enter Your name",
                "image.required" => "Please fill the update image",
                "email.required" => "Enter Your email",
                "email.email"=>"Enter you validate email address",
                // "confirm_email.required" => "Please chack your confirm_email",
                "phone_number.required" => "Enter your Phone number",
                 "phone_number.min" => "Enter your Phone number atlist 9 number",
                 "phone_number.max" => "Enter your Phone number  no more then 10 number",
                 // "position.required" => "Enter your position",
                  "type.required" => "please select your type",
                  
                      ])->validate(); 

            
             $obj= User::find($id);

        $file = $request->file("image");

            if($request->hasFile("image")){
                $file->move("images/",$file->getClientOriginalName());
            }


            $obj->name = $request->name;
            $obj->email = $request->email;
            $obj->phone_number = $request->phone_number;
            
            $obj->image = $file->getClientOriginalName();
            // $obj->webside_url = $request->webside_url;
            // $obj->position = $request->position;
             
            $obj->type = $request->type;
            // $obj->address = $request->address;
              
                $is_save =$obj->save();

        if($is_save){
                session()->flash("thisMassage","your Update is success thank you Update");
                return redirect("/Adminuser/".$id."/edit");
        } else
        {
             session()->flash("thisMassage","your Update not done please try another time");   
            return redirect("/Adminuser/".$id."/edit");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $delete = User::find($id);
         //print_r($delete);
        // exit
         $is_delete = $delete->delete();
         if($is_delete){
                session()->flash("thisMassage","This data is deleted");
                return redirect("/Adminuser");
        } else
        {
             session()->flash("thisMassage","This data is not  deleted something is wrong");   
            return redirect("/Adminuser");
        }
    }
      
      
     public function contact()
     {
       $userdatac =contact::orderBy('id','desc')->get();
      return view("admin.contact") ->with(array('userdata'=>$userdatac));

     }
     
      public function deletecontact($id)
     {
       $delete =contact::find($id);
           

     $is_delete = $delete->delete();
         if($is_delete){
                session()->flash("thisMassage","This data is deleted");
                return redirect("/contact");
        } else
        {
             session()->flash("thisMassage","This data is not  deleted something is wrong");   
            return redirect("/contact");
        }

     }

     public function editer()
     {
        return view("admin.ck_editer");
     }


     public function addpage(Request $request)
     {
               $data = Validator::make($request->all(),
            [
                 "manu_id" => "required|unique:addpages",
                "editor1" => "required"
           
                
            ],
            [
               "manu_id.required" => "palase fillup your seo link",
                 "manu_id.unique" => "allready taken",
                "editor1.required" => "desing your page"
          ])->validate(); 

            
         
           $obj=new addpage;

              $obj->manu_id = $request->manu_id;
             $obj->add_page = $request->editor1;
              $obj->status = 1;
          
         
            
                $is_save =$obj->save();

        if($is_save){
                session()->flash("thisMassage","your page is added");
                return redirect("/add_page");
        } else
        {
             session()->flash("thisMassage","your page is not added");   
            return redirect("/add_page");
        }

     }
      
     public function findid($id)
     {
       $email =contact::find($id);
           //print_r($email->email);
        return view("admin.mail")->with(array('emaili' =>$email));
       
     }

      public function basic_email(Request $request)
     { 
            $email1 = $request->email;
            $address = $request->address;

          $data = array('name'=>"debendra");
           // echo $email;
           // echo $address;
           // exit;

        $data= Mail::send([], [], function ($message) use ($email1,$address) { 
       $message->to($email1, 'Tutorials Point')
       ->subject('subject') 
       ->setBody($address, 'text/html'); 
      });
          if($data){
                session()->flash("thisMassage","you reply the SMS successfully");
                return redirect("/contact");
        } else
        {
             session()->flash("thisMassage","Your SMS is not send");   
            return redirect("/contact");
        }

       
        //  Mail::send(['text'=>'mail'],$data,function($message) {
        // $message->to('sahudebendra03@gmail.com', 'Car Rental')->subject
        //      ('hy');
        //   $message->from('sahudebendra03@gmail.com','Debendra');
        // });
        //  echo "Basic Email Sent. Check your inbox.";

       
     }
      
  
}
