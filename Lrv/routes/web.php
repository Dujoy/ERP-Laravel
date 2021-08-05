<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\listController;

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


Route::get('/add/{​​​​​​​​id}​​​​​​​​','listController@delete')->name("id");

Route::get('/listtwo', ['uses'=> 'listtwoController@listtwo']);
Route::get('/listthr', ['uses'=> 'listthrController@listthr']);


Route::get('/registration', ['uses'=> 'registrationController@registration']);
Route::post('/registration', ['uses'=> 'registrationController@reg']);
Route::post('/registration','registrationController@submit');
Route::post('/form', ['uses'=> 'registrationController@form']);
Route::get('/edit/{​​​id}​​​','registrationController@edit');
Route::post('/edit/{​​​id}​​​','registrationController@update');
Route::get('/delete/{​​​id}​​​', 'registrationController@delete')->name("delete");




Route::get('/account', ['uses'=> 'accountController@account']);
Route::post('/acc', ['uses'=> 'accountController@acc']);

Route::get('/Home', ['uses'=> 'HomeController@Home']);


Route::get('/Editseller', ['uses'=> 'EditsellerController@Editseller']);
Route::post('/Editseller', ['uses'=> 'EditsellerController@Edi']);
Route::get('/Editseller/{id}','EditsellerController@Editseller');
Route::post('/Editseller/{id}','productController@update1');
Route::get('/add', ['uses'=> 'productController@add']);
Route::post('/add','productController@submit1');
Route::get('/list', ['uses' => 'listController@list']);
Route::get('/delete1/{id}', 'productController@delete1')->name("delete1");


Route::get('/manage', ['uses'=> 'manageController@manage']);
Route::post('/manage','manageController@submit');


Route::get('/buyerinfo', ['uses'=> 'buyerinfoController@buyerinfo']);

Route::get('/productcategory', ['uses'=> 'productcategoryController@productcategory']);
Route::post('/ctg', ['uses'=> 'productcategoryController@ctg']);

Route::get('/login', ['uses'=> 'loginController@login']);
Route::post('/login', ['uses'=> 'loginController@log']);

Route::get('/deletebuy', ['uses'=> 'deletebuyController@deletebuy']);
Route::post('/del', ['uses'=> 'deletebuyController@del']);

Route::get('/connnet', ['uses'=> 'connnetController@connnet']);

Route::get('/payment', ['uses'=> 'paymentController@payment']);
Route::post('/payment', ['uses'=> 'paymentController@pay']);
Route::post('/payment','paymentController@submit');

Route::get('/logout','logoutController@index');


