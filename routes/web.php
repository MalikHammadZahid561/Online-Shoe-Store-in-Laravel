<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customercontroller;
use App\Models\customer;
use App\Http\Controllers\shoecontroller;
use App\Models\shoe;
use App\Http\Controllers\citycontroller;
use App\Models\city;



Route::get('/', function () {
    return view('welcome');
});
//create

Route::get('customer/create',
[Customercontroller::class, 'create'])
->name('customer.create');

Route::post('customer/store', 
[Customercontroller::class, 'store'])
->name('customer.store');

//read

Route::get('customer/read',
[Customercontroller::class, 'read'])
->name('customer.read');

Route::post('customer/read/{id}', 
[Customercontroller::class,'store'])
->name('customer.read');

//edit or update

Route::get('customer/edit/{name}',
[Customercontroller::class,'edit'])
 ->name('customer.edit');
Route::post('customer/update/{name}', 
[Customercontroller::class,'update'])
 ->name('customer.update');


 

// delete

Route::get('customer/delete/{name}',
[Customercontroller::class, 'delete'])
->name('customer.delete');

Route::post('customer/read/{id}', 
[Customercontroller::class,'destroy'])
->name('customers.destroy');




//create

Route::get('shoe/create',
[Shoecontroller::class, 'create'])
->name('shoe.create');

Route::post('shoe/store', 
[Shoecontroller::class, 'store'])
->name('shoe.store');

//read

Route::get('shoe/read',
[Shoecontroller::class, 'read'])
->name('shoe.read');

Route::post('shoe/read/{id}', 
[Shoecontroller::class,'store'])
->name('shoe.read');

//edit or update

Route::get('shoe/edit/{shoeId}',
[Shoecontroller::class,'edit'])
 ->name('shoes.edit');
Route::post('shoe/update/{shoeId}', 
[Shoecontroller::class,'update'])
 ->name('shoe.update');

// delete

Route::get('shoe/delete/{shoeId}',
[Shoecontroller::class, 'delete'])
->name('shoe.delete');

Route::post('shoe/read/{id}', 
[Shoecontroller::class,'destroy'])
->name('shoes.destroy');





//create

Route::get('city/create',
[Citycontroller::class, 'create'])
->name('city.create');

Route::post('city/store', 
[Citycontroller::class, 'store'])
->name('city.store');

//read

Route::get('city/read',
[Citycontroller::class, 'read'])
->name('city.read');

Route::post('city/read/{id}', 
[Citycontroller::class,'store'])
->name('city.read');

//edit or update

Route::get('city/edit/{city_id}',
[Citycontroller::class,'edit'])
 ->name('citys.edit');
Route::post('city/update/{city_id}', 
[Citycontroller::class,'update'])
 ->name('city.update');

// delete

Route::get('city/delete/{city_id}',
[Citycontroller::class, 'delete'])
->name('city.delete');

Route::post('city/read/{id}', 
[Citycontroller::class,'destroy'])
->name('citys.destroy');
