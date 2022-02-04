{{-- @extends('layouts.app') --}}
@extends('template')
@section('content')

    <div class="col-md-8 offset-md-2">
        <h3>Tambah Data</h3>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>    
        </div><br> 
        @endif
    
        <form method="POST" action="{{route('camera.update', $camera->id)}}">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="id_camera"> ID Kamera </label>
            <input type="text" class="form-control" name="id_camera"value="{{$camera->id_camera}}"/>
        </div>
        <div class="form-group">
            <label for="jenis"> Jenis </label>
            <input type="text" class="form-control" name="jenis"value="{{$camera->jenis}}"/>
        </div>
        <div class="form-group">
            <label for="merk"> Merk </label>
            <input type="text" class="form-control" name="merk"value="{{$camera->merk}}"/>
        </div>
        <div class="form-group">
            <label for="Tipe"> Tipe </label>
            <input type="text" class="form-control" name="tipe"value="{{$camera->tipe}}"/>
        </div>
        <div class="form-group">
            <label for="harga"> Harga </label>
            <input type="text" class="form-control" name="harga"value="{{$camera->harga}}"/>
        </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@stop