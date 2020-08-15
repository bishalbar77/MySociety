<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/ 

Auth::routes();
//When comment on line 15 is done then we shall make this as dashboard
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['store']]);
    
    Route::get('/users/{user}/changestatus', 'UsersController@changestatus')->name('users.changestatus');
});
Route::get('/managercreate', 'Admin\UsersController@managercreate')->name('users.managercreate');
Route::get('/securitycreate', 'Admin\UsersController@securitycreate')->name('users.securitycreate');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/rent', 'PaymentsController@rent')->name('rent');
Route::get('/receipts', 'PaymentsController@index')->name('receipts');
Route::any('/rentstore', 'PaymentsController@store')->name('rent.store');
Route::get('/generate-pdf/{rent}','PaymentsController@pdf')->name('center.pdf');
Route::get('/registeruser', 'PagesController@registeruser');
Route::get('/staff','Admin\UsersController@staff')->name('users.staff');
Route::resource('/residents', 'OwnerController');
Route::get('/addowner' ,'OwnerController@addowner');
Route::any('/storeowner' ,'OwnerController@store');
Route::get('/profiles/{user}/edit', 'PagesController@edit')->name('profiles.edit');
Route::any('/profiles/{user}', 'PagesController@update')->name('profiles.update');
Route::get('/profile', 'PagesController@profile')->name('profile');
Route::resource('/visitor', 'VisitorController');
Route::any('/storevisitor', 'VisitorController@storevisitor');

Route::get('/addticket', 'ComplainController@addticket')->name('addticket');
Route::get('/ticket', 'ComplainController@index')->name('ticket');
Route::get('/assign', 'ComplainController@assign')->name('assign');
Route::get('/ticket/{rent}/changestatus', 'ComplainController@changestatus')->name('ticket.changestatus');
Route::get('/ticket/{rent}/change', 'ComplainController@change')->name('ticket.change');
Route::any('/storeticket', 'ComplainController@store')->name('storeticket');



// Demo routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');
Route::get('/test', 'PagesController@test'); 

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


