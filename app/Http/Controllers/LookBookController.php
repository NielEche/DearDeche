<?php

namespace App\Http\Controllers;

use App\Models\Lookbooks;
use Illuminate\Http\Request;

class LookBookController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lookbook'); 
    }


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
            $lookbook = new Lookbooks();

            $lookbook->project = $request->project;
            $lookbook->project_id = $request->project_id;


            if ($request->hasfile('book_image')) {
                $file = $request->file('book_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/lookbook/', $filename);
                $lookbook->book_image = $filename;
            } else {
                return $request;
                $lookbook->book_image = '';
            }


            $lookbook->save();
     
            return redirect('lookbook')->with('message', 'lookbook Added Succesfully!');
            

        } catch (\Throwable $th) {
    
            //throw $th;
            $response = [
              'ERROR' => false,
              'message' => "OOPS! Something fucking wennt wrong"
            ];
            return response()->json($response, 422);
        }
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function showData(Request $request)
    {
        $lookbook = Lookbooks::where('project_id', $request->id)->get();
        return view('bookimages', compact(['lookbook']));
    }
}
