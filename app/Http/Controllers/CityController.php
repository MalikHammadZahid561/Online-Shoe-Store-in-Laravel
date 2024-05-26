<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
class CityController extends Controller
{
     public function read()
    {
    
    $stdHandler = city::all();
    return view ("city/read")
    ->with(['citys' => $stdHandler]);}



    public function create() {
        
        return view ("city.create");
    }
    public function store(Request $request) {
        $city = new city(); 
        $city->city_id = $request->get('city_id');
        $city->name= $request->get('name');
        

        $city->save(); 
return redirect('city/read')
->with('status', 'CITYID'.$city->city_id.' city added Successfully!');

}
  
public function edit(Request $request, $city_id) { 
 
    $stdHandler = city::find($city_id);// Load citys using the model 'Student'
    
    // Pass the $citys to the view, 'city/update'
    // so that user can update.
    return view('city/update')
    ->with(['citys' =>  $stdHandler]);
    }

    public function update(Request $request, $city_id) {
        // Locate the row of this SHOEID so that updated record
        // can be overwritten ONLY on the previous record of this SHOEID.
        $city = city::find($city_id);
        // you can add the chech here whether this city exists or not?
        $city->city_id = $request->get('city_id'); // Copy from textbox and paste on the handler
        $city->name= $request->get('name');
        $city->save(); 
        // --------------------------------------
        // Help on the following code is given at the following URL
// https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data

return redirect('city/read')
->with('status', 'CITYID '.$city_id.' updated Successfully!');
// --------------------------------------
}



//delete function



public function delete($city_id) {
    // Delete the row pointed to by this SHOEID
    city::destroy($city_id);
    // --------------------------------------
    // Help on the following code is given at the following URL
    // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data
    //
    return redirect('city/read')
    ->with('status', 'CITYID '.$city_id.' deleted Successfully!');
    // --------------------------------------
    }






}
