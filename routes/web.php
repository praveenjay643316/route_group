<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome',[CollectionsController::class, 'index']);



//route with group start
Route::group(['prefix' => 'routegroup'], function()  
{  
   Route::get('/route1',function()  
 {  
   echo "php tutorial";  
 });  
Route::get('/route2',function()  
 {  
   echo "laravel tutorial";  
 });  
Route::get('/route3',function()  
 {  
   echo "angular tutorial";  
 });  
   
});

//end

//route with group(middleware)
Route::group(['middleware'=>['web'],'prefix'=>'infos'], function()  
{  
  
   Route::get('/aws',function()  
 {  
   echo "aws tutorial";  
 });  
Route::get('/jira',function()  
 {  
   echo "jira tutorial";  
 });  
Route::get('/testng',function()  
 {  
   echo "testng tutorial";  
 });  
  
}); 

//end

Route::view('noaccess','noaccess');


//custom middleware start
Route::middleware(['age'])->group( function()  
{  
  
   Route::get('/aws',function()  
 {  
   echo "aws tutorial";  
 });  
Route::get('/jira',function()  
 {  
   echo "jira tutorial";  
 });  
Route::get('/testng',function()  
 {  
   echo "testng tutorial";  
 });  
  
});

//end