<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Delegation;

class DelegationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delegations = Delegation::all();

        return response()->json([
            'delegations' => $delegations
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

        $delegation = Delegation::create($data);
        
        return response()->json([
            'delegation' => $delegation
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
        $delegation = Delegation::find($id);
        
        return response()->json([
            'delegation' => $delegation
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

        $delegation = Delegation::find($id);
        $delegation->update($data);
        
        return response()->json([
            'delegation' => $delegation
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
        Delegation::delete($id);

        return response()->json([
            'ok'
        ]);
    }
}
