<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cooperative;

class CooperativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperatives = Cooperative::all();

        return response()->json([
            'cooperatives' => $cooperatives
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

        $cooperative = Cooperative::create($data);
        
        return response()->json([
            'cooperative' => $cooperative
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
        $cooperative = Cooperative::find($id);
        
        return response()->json([
            'cooperative' => $cooperative
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

        $cooperative = Cooperative::find($id)->update($data);
        
        return response()->json([
            'cooperative' => $cooperative
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
        Cooperative::delete($id);

        return response()->json([
            'ok'
        ]);
    }
}
