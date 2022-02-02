@extends('layouts.app')

@section('content')

    <div class="col-md-8 offset-md-2">
        <h3>Tambah Mahasiswa</h3>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>    
        </div><br> 
        @endif
    
        <form method="POST" action="{{route('camera.store')}}">
        @csrf
        <div class="form-group">
            <label for="jenis"> Jenis </label>
            <input type="text" class="form-control" name="jenis"/>
        </div>
        <div class="form-group">
            <label for="merk"> Merk </label>
            <input type="text" class="form-control" name="merk"/>
        </div>
        <div class="form-group">
            <label for="Tipe"> Tipe </label>
            <input type="text" class="form-control" name="tipe"/>
        </div>
        <div class="form-group">
            <label for="harga"> Harga </label>
            <input type="text" class="form-control" name="harga"/>
        </div>
        
        
        </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@stop