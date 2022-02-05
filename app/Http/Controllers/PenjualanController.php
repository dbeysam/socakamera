<?php

namespace App\Http\Controllers;

use App\camera;
use App\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cameras = camera::all();
        // $total = array();
        // foreach($cameras as $data)
        // {
        //     $Total = $data->harga*$data->jumlah;
        //     array_push($total, $Total);
        // }
        // dump($total);
        //return view('penjualan.index', compact('cameras', 'total'));
        return view('penjualan.index', compact('cameras'));
    }

    public function laporan(){
        $penjualans = Penjualan::all();
        return view('penjualan.laporan', compact('penjualans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        camera::index($request->all());
        $cameras = camera::where('id', '$camera->id' );
        return view('Penjualan.create', ['cameras' => $cameras]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Penjualan::create($request->all());
        return redirect('penjualan');
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
