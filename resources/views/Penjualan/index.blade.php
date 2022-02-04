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
    
        <form method="POST" action="{{route('penjualan.create')}}">
        @csrf
        <div class="form-group">
            <label for="id_camera"> ID camera </label>
            <select name="id_camera" class="form-control">
                @foreach ($cameras as $camera)
                    <option value="{{ $camera->id }}">{{ $camera->merk }}{{ $camera->tipe }}</option>
                @endforeach
            </select>
        </div>
        
        
        
       
            <button type="submit" class="btn btn-primary">Pilih</button>
        </form>
    </div>
@stop