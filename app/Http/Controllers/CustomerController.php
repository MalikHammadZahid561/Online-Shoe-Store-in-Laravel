<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\City;
class CustomerController extends Controller
{
    public function read()
    {
    
    $stdHandler = customer::all();


    return view ("customer/read")
    
    ->with(['customers' => $stdHandler]);}



    public function create() {
        $citys = City::all();
        return view ("customer.create")
        ->with(['citys' => $citys]);

    }
    public function store(Request $request) {
        $input = $request->all();
        Customer::create($input); 
return redirect('customer/read')
->with('status', 'NAME  added Successfully!');
// --------------------------------------
}
public function edit(Request $request, $name) { 
 
    $stdHandler = Customer::find($name);// Load names using the model 'Student'
    
    // Pass the $names to the view, 'customer/update'
    // so that user can update.
    return view('customer/update')
    ->with(['customers' =>  $stdHandler]);
}

    public function update(Request $request, $name) {
        
        $customer = customer::find($name);
        $customer->name = $request->get('name'); 
        $customer->address = $request->get('address');
        $customer->telNo = $request->get('telNo');
        $customer->email = $request->get('email');
       
   
        $customer->save(); 
        

return redirect('customer/read')
->with('status', 'name '.$name.' updated Successfully!');
// --------------------------------------
}


public function delete($name) {
    // Delete the row pointed to by this name
    customer::destroy($name);
    // --------------------------------------
    // Help on the following code is given at the following URL
    // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data
    //
    return redirect('customer/read')
    ->with('status', 'NAME'.$name.' deleted Successfully!');
    // --------------------------------------
    }







}
