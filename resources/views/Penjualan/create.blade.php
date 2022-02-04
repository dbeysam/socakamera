{{-- @extends('layouts.app') --}}
@extends('template')
@section('content')

    <div class="col-md-8 offset-md-2">
        <h3>Penjualan</h3>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>    
        </div><br> 
        @endif
    
        <form method="POST" action="{{route('penjualan.store')}}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="id_camera"> ID Kamera </label>
            <input type="text" class="form-control" name="id_camera" value="{{ $cameras->id_camera }}"/>
        </div>
        <div class="form-group">
            <label for="customer"> Nama Cusomer </label>
            <input type="text" class="form-control" name="customer"/>
        </div>
        <div class="form-group">
            <label for="jumlah"> Jumlah </label>
            <input type="text" class="form-control" name="jumlah"/>
        </div>
        <div class="form-group">
            <label for="total"> Total </label>
            <input type="text" class="form-control" name="total"/>
        </div>
        
        
       
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@stop