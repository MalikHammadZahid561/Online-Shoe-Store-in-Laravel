<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;
class ShoeController extends Controller
{
     public function read()
    {
    
    $stdHandler = shoe::all();
    return view ("shoe/read")
    ->with(['shoes' => $stdHandler]);}



    public function create() {
        return view ("shoe.create");
    }
    public function store(Request $request) {
        $shoe = new shoe(); 
        $shoe->shoeId = $request->get('shoeId');
        $shoe->brand = $request->get('brand');
        $shoe->price = $request->get('price');
        $shoe->size = $request->get('size');
        $shoe->colour = $request->get('colour');
        $shoe->quantity = $request->get('quantity');

        $shoe->save(); 
return redirect('shoe/read')
->with('status', 'SHOEID'.$shoe->shoeId.' shoe added Successfully!');

}
  
public function edit(Request $request, $shoeId) { 
 
    $stdHandler = shoe::find($shoeId);// Load shoes using the model 'Student'
    
    // Pass the $shoes to the view, 'shoe/update'
    // so that user can update.
    return view('shoe/update')
    ->with(['shoes' =>  $stdHandler]);
    }

    public function update(Request $request, $shoeId) {
        // Locate the row of this SHOEID so that updated record
        // can be overwritten ONLY on the previous record of this SHOEID.
        $shoe = shoe::find($shoeId);
        // you can add the chech here whether this shoe exists or not?
        $shoe->shoeId = $request->get('shoeId'); // Copy from textbox and paste on the handler
        $shoe->brand = $request->get('brand');
        $shoe->price = $request->get('price');
        $shoe->size = $request->get('size');
        $shoe->colour = $request->get('colour');
        $shoe->quantity = $request->get('quantity');
        // Since the marital_status field has a default value of ZERO,
        // therefore, even if no text is copied from the text box
        // the value ZERO would be stored.
        //$shoe->marital_status = $request->get('marital_status');
        $shoe->save(); /* Overwrite data on the row pointed by SHOEID */
        // --------------------------------------
        // Help on the following code is given at the following URL
// https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data

return redirect('shoe/read')
->with('status', 'SHOEID '.$shoeId.' updated Successfully!');
// --------------------------------------
}



//delete function



public function delete($shoeId) {
    // Delete the row pointed to by this SHOEID
    shoe::destroy($shoeId);
    // --------------------------------------
    // Help on the following code is given at the following URL
    // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data
    //
    return redirect('shoe/read')
    ->with('status', 'SHOEID '.$shoeId.' deleted Successfully!');
    // --------------------------------------
    }






}
