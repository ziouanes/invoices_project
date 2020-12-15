<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    if (Auth::check()) {
        return Redirect::to('home');
    }
    return view('Auth.login');
});



// Route::get('/', function () {
//     return view('Auth.login');
// });


// Auth::routes();
Auth::routes(['register' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('invoices', 'InvoicesController');
Route::resource('sections', 'SectionsController');
Route::resource('products', 'ProductsController');
Route::resource('InvoiceAttachments', 'InvoiceAttachmentsController');



Route::get('/section/{id}', 'InvoicesController@getproducts');

Route::get('/InvoicesDetails/{id}', 'InvoicesDetailsController@edit');
Route::get('/edit_invoice/{id}', 'InvoicesController@edit');

Route::get('/Status_show/{id}', 'InvoicesController@show')->name('Status_show');
Route::post('/Status_Update/{id}', 'InvoicesController@Status_Update')->name('Status_Update');

Route::resource('Archive', 'InvoiceAchiveController');

Route::get('Invoice_Paid', 'InvoicesController@Invoice_Paid');

Route::get('Invoice_UnPaid', 'InvoicesController@Invoice_UnPaid');

Route::get('Invoice_Partial', 'InvoicesController@Invoice_Partial');

Route::get('Print_invoice/{id}', 'InvoicesController@Print_invoice');



Route::get('download/{invoice_number}/{file_name}', 'InvoicesDetailsController@get_file');
Route::get('View_file/{invoice_number}/{file_name}', 'InvoicesDetailsController@open_file');


Route::post('delete_file', 'InvoicesDetailsController@destroy')->name('delete_file');



Route::get('/{page}', 'AdminController@index');
