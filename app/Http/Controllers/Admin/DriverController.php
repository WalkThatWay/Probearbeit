<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::paginate(10);
        return view("admin.driver.index", compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.driver.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "drivername" => "required",
            "permanentnumber" => "required",
            "nationality" => "required",
            "dob" => "required",
            "information" => "required",
            "driverid" => "required"
        ]);

        $driver = new Driver();
        $driver->drivername = $request->drivername;
        $driver->permanentnumber = $request->permanentnumber;
        $driver->nationality = $request->nationality;
        $driver->dob = $request->dob;
        $driver->information = $request->information;
        $driver->driverid = $request->driverid;
        $driver->save();

        return redirect(route('driver.index'))->with('message', 'Driver created with success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        return view("admin.driver.edit", compact('driver'));
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
        $this->validate($request, [
            "drivername" => "required",
            "permanentnumber" => "required",
            "nationality" => "required",
            "dob" => "required",
            "information" => "required"
        ]);
        $driver = Driver::find($id);
        $driver->drivername = $request->drivername;
        $driver->permanentnumber = $request->permanentnumber;
        $driver->nationality = $request->nationality;
        $driver->dob = $request->dob;
        $driver->information = $request->information;
        $driver->save();
        return redirect(route('driver.index'))->with('message', 'Driver updated with success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Driver::find($id)->delete();
        return redirect(route('driver.index'))->with('message', 'Driver deleted with success');
    }
}
