<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //code...
            $contacts = new Contacts();

            $contacts->name = $request->name;
            $contacts->email = $request->email;
            $contacts->phone = $request->phone;
            $contacts->message = $request->message;

            $contacts->save();
     
            return redirect('contact')->with('message', 'Submitted  Succesfully!');
            

        } catch (\Throwable $th) {
    
            //throw $th;
            $response = [
              'ERROR' => false,
              'message' => "OOPS! Something fucking wennt wrong"
            ];
            return response()->json($response, 422);
        }
    }
}
