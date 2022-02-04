{{-- @extends("layouts.app") --}}
@extends('template')
@section("content")
<br><br><br><br>
    <h1>Data Kamera</h1>
    <a href={{ route('camera.create') }} class="btn btn-success">Tambah Data</a>
    <div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Kamera</th>
                <th>Jenis</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cameras as $camera)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    {{-- <td>{{ $camera->id }}</td> --}}
                    <td>{{ $camera->id_camera }}</td>
                    <td>{{ $camera->jenis }}</td>
                    {{-- <td>{{ $camera->jenis == "P" ? "Pria" : "Wanita"}}</td> --}}
                    <td>{{ $camera->merk }}</td>
                    <td>{{ $camera->tipe }}</td>
                    <td>{{ $camera->harga }}</td>
                    <td>
                        <a href="{{route('camera.edit', $camera->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td><form action="{{ route('camera.destroy', $camera->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

