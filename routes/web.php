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

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

//custom routes
    Route::get('/invoice',[InvoiceController::class, 'get_data']);
    Route::get('/view-invoice/{id}',[InvoiceController::class, 'view_data']);