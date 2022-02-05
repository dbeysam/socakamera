{{-- @extends('layouts.app') --}}
@extends('template')
@section('content')
<br><br><br><br>
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
        <div class="form-group">
            <label for="customer"> Nama Cusomer </label>
            <input type="text" class="form-control" name="customer"/>
        </div>
        <div class="form-group">
            <label for="id_camera"> ID camera </label>
            <select name="id_camera" class="form-control">
                @foreach ($cameras as $camera)
                    <option value="{{ $camera->id }}">{{ $camera->merk }}{{ $camera->tipe }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah"> Jumlah </label>
            <input type="number" class="form-control" name="jumlah"/>
        </div>
        <div class="form-group">
            <label for="total"> Total </label>
            <input type="number" class="form-control" name="total"/>
        </div>
            <button type="submit" class="btn btn-primary">Jual</button>
        </form>
    </div>
@stop