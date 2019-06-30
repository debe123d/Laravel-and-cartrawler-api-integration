<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "fronthomeController@car");

Route::get('/car_rental/{slug}', [
'uses' => 'PageController@getPage' 
])->where('slug', '([A-Za-z0-9\-\/]+)');

Route::group(['middleware' => 'disablepreventback'], function() {
   Route::get("/admin", "loginControler@loginshow");
 route::post("/admin", "loginControler@singin");
 Route::post("/logoutuser", "loginControler@logoutuser");
 
 Route::get("/otaproxy", function () {
    return view('Car_rental/otaproxygeo');
});

 Route::get("car_rental/search_car", "loginControler@search_car");



Route::resource("Adminuser","AdminuserController");
Route::get("Adminuser/{Adminuser}/changePassword","changepasswordController@changePassword");
Route::put("Adminuser/{Adminuser}/changePassword","changepasswordController@change");
Auth::routes();
Route::get("/addmanu", "addmanuController@addmanu");
Route::get("/create_manu", "addmanuController@createmanu");
Route::post("/create_manu", "addmanuController@storemanu");
Route::DELETE("/create_manu/{create_manu}", "addmanuController@delete_manu");
Route::get("/create_manu/{create_manu}/edit", "addmanuController@edit");
Route::PUT("/create_manu/{create_manu}/edit", "addmanuController@edit_manu");
Route::get("/contact", "AdminuserController@contact");
Route::DELETE("/contact/{contact}", "AdminuserController@deletecontact");
Route::get("/add_page", "AdminuserController@editer");
Route::post("/add_page", "AdminuserController@addpage");
Route::DELETE("/add_page/{add_page}", "addmanuController@delete_manu");
Route::get("/add_page/{add_page}/edit", "addmanuController@edit");
Route::PUT("/add_page/{add_page}/edit", "addmanuController@edit_manu");
Route::get("/status-update/{id}/{status}/{column}/{table}/{page}", "addmanuController@active");
Route::get("/status-update/{id}/{status}/{column}/{table}/{page}", "addmanuController@active");
Route::get("/contact/{id}/email", "AdminuserController@findid");
Route::post("/contact/{id}/email", "AdminuserController@basic_email");


    });

 Route::get("/car_rental","fronthomeController@car");
 Route::get("/car_rental/contact","fronthomeController@contact");
 Route::get("/car_rental/search","fronthomeController@search");


Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/done', 'addmanuController@done')->name('done');
Route::post("/car_rental/contact","fronthomeController@contactdata");