<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use anlutro\LaravelSettings\Facade as Setting;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        if ($request->logo) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('logo'), $imageName);
            $data['logo'] =  $imageName;
        }
        if ($request->logo1) {
            $imageName = time() . '.' . $request->logo1->extension();
            $request->logo1->move(public_path('logo1'), $imageName);
            $data['logo1'] =  $imageName;
        }
        if ($request->logo2) {
            $imageName = time() . '.' . $request->logo2->extension();
            $request->logo2->move(public_path('logo2'), $imageName);
            $data['logo2'] =  $imageName;
        }
        if ($request->seal) {
            $imageName = time() . '.' . $request->seal->extension();
            $request->seal->move(public_path('seal'), $imageName);
            $data['seal'] =  $imageName;
        }
        if ($request->signature) {
            $imageName = time() . '.' . $request->signature->extension();
            $request->signature->move(public_path('signature'), $imageName);
            $data['signature'] =  $imageName;
        }
        setting($data)->save();
        return redirect(route('settings.index'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
