<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restapi;

class RestapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Restapi::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'device' => 'required',
            'created_at' => 'required',
            'snr' => 'required',
            'station' => 'required',
            'data' => 'required',
            'avgSnr' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'rssi' => 'required',
            'seqNumber' => 'required',

        ]);
        return Restapi::create($request->all()
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Restapi::find($id);
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
        $restapi = Restapi::find($id);
        $restapi->update($request->all());
        return $restapi;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Restapi::destroy($id);
    }

    /**
     * Search for a device.
     *
     * @param  string  $device
     * @return \Illuminate\Http\Response
     */
    public function search($device)
    {
        return Restapi::where('device','like'.'%'.$device.'%')->get();
    }
}

