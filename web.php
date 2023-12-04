<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
  return view('welcome');
 });

 Route::get('login', function () {
  return view('login');
 });

 //Route::post('logged', function () {
  //return 'you are logged in';
 //})->name('logged');

//Route::get('control', [ExampleController::class,'show']);
Route::post('control', [ExampleController::class,'show'])->name('control');


//Route::get('/About', function () {
 // return view ('About_Contact');
//});

//Route::get('/Contact Us', function () {
  //return ('About_Contact');
//});


//Route::get('test', function () {
  //  return 'welcome to my first laravel website';
//});
//Route::get('/test1/{id}', function ($id) {
  //  return 'The id is: '. $id;
//});

//Route::get('/test2/{id?}', function ($id = 0) {
  //  return 'The ID 2 is: '. $id; 
//})->where (['id'=> '[0-9]+']);

//Route::get('/test2/{id?}', function ($id = 0) {
  //  return 'The ID 2 is: '. $id; 
//})->whereNumber ('id');

//Route::get('/test3/{name?}', function ($name = null) {
  //  return 'The name is: '. $name; 
//})->whereAlpha ('name');


//Route::get('/test4/{id}/{name}', function ($id, $name) {
   // return 'The age is '. $id. 'and the name is:' .$name ; 
//})->where(['id' => '[0-9]+', 'name'=> '[a-zA-Z]+']);



//Route::get('/product/{category}', function ($cat) {
   // return 'The category is '. $cat; 
//})->whereIn('category', ['laptop','pc','mobile']);




//Route::fallback(function(){
  //  return redirect('/');
//});

///Route::prefix('lar')->group(function(){

    ///Route::get('/', function() {
      //  return view('code');
    //});

    ///Route::get('/test1/{id}', function ($id) {
      //  return 'The id is: '. $id;
    //});
     //Route::get('/test2/{id?}', function ($id = 0) {
      //  return 'The ID 2 is: '. $id; 
    //})->whereNumber ('id');
    
    //Route::get('/test3/{name?}', function ($name = null) {
      //  return 'The name is: '. $name; 
    //})->whereAlpha ('name');
    
    
    //Route::get('/test4/{id}/{name}', function ($id, $name) {
    //    return 'The age is '. $id. 'and the name is:' .$name ; 
  //  })->where(['id' => '[0-9]+', 'name'=> '[a-zA-Z]+']);
    
     
    //Route::get('/product/{category}', function ($cat) {
      //  return 'The category is '. $cat; 
    //})->whereIn('category', ['laptop','pc','mobile']);

//});

//Route::prefix('About')->group(function () {
 // Route::get('/', function() {
   //   return view('About_Contact');
  //});
//});
  //Route::prefix('Contact')->group(function () {
    //Route::get('/', function() {
      //  return view('About_Contact');
    //});

//});

//Route::prefix('Blog')->group(function () {
  //Route::get('Science', function () {
    //return view('Science');
//});

//Route::get('Sports', function () {
 // return view('Sports');
//});
//Route::get('Math', function () {
  //return view('Math');
//});
//Route::get('Medical', function () {
  //return view('Medical');
//});

//});



