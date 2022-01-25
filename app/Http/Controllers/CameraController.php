<?php

namespace App\Http\Controllers;

use App\camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from 'cameras';
        $cameras = camera::all();
        return view('camera.index', compact('cameras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //input
        $cameras = camera::all();
        return view('camera.create', compact('cameras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //menyimpan data ke database
        $request-> validate([
            'jenis'  => 'required',
            'merk'  => 'required',
            'tipe'  => 'required',
            'harga'  => 'required',
        ]);
        camera::create($request->all());
        return redirect('camera');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function show(camera $camera)
    {
        //edit
        return view('camera.edit',compact('camera'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function edit(camera $camera)
    {
        //
        return view('camera.edit',compact('camera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, camera $camera)
    {
        //fungsi update
        $request-> validate([
            'jenis'  => 'required',
            'merk'  => 'required',
            'tipe'  => 'required',
            'harga'  => 'required',
        ]);
        $camera->update($request->all());
        return redirect('camera');                    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function destroy(camera $camera)
    {
        //fungsi delete
        $camera->delete();
        return redirect('camera');
    }
}
