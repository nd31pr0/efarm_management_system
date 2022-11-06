<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Farmer;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmers = Farmer::all();

        return response()->json([
            'farmers' => $farmers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $farmer = Farmer::create($data);
        
        return response()->json([
            'farmer' => $farmer
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $farmer = Farmer::find($id);
        
        return response()->json([
            'farmer' => $farmer
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $farmer = Farmer::find($id)->update($data);
        
        return response()->json([
            'farmer' => $farmer
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Farmer::delete($id);

        return response()->json([
            'ok'
        ]);
    }
}
