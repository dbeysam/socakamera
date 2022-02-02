@extends("layouts.app")

@section("content")
    <h1>Data Kamera</h1>
    <a href={{ route('penjualan.create') }} class="btn btn-success">Tambah Data</a>
    <div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualans as $penjualan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    {{-- <td>{{ $penjualan->id }}</td> --}}
                    <td>{{ $penjualan->jenis }}</td>
                    {{-- <td>{{ $penjualan->jenis == "P" ? "Pria" : "Wanita"}}</td> --}}
                    <td>{{ $penjualan->merk }}</td>
                    <td>{{ $penjualan->tipe }}</td>
                    <td>{{ $penjualan->harga }}</td>
                    <td>
                        <a href="{{route('penjualan.edit', $penjualan->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td><form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="post">
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

