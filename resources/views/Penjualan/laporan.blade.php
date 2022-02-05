{{-- @extends("layouts.app") --}}
@extends('template')
<!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-html5-2.1.1/b-print-2.1.1/date-1.1.1/kt-2.6.4/sp-1.4.0/datatables.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-html5-2.1.1/b-print-2.1.1/date-1.1.1/kt-2.6.4/sp-1.4.0/datatables.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@section('content')
<br><br><br><br>

    <h1>Laporan</h1>
    
    <div class="col-sm-12">
    <table class="table" id="data_users_reguler">
        <thead>
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Tipe Kamera</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualans as $penjualan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    {{-- <td>{{ $penjualan->id }}</td> --}}
                    <td>{{ $penjualan->customer }}</td>
                    <td>{{ $penjualan->camera->jenis }}</td>
                    {{-- <td>{{ $penjualan->jenis == "P" ? "Pria" : "Wanita"}}</td> --}}
                    <td>{{ $penjualan->camera->harga }}</td>
                    <td>{{ $penjualan->jumlah }}</td>
                    <td>{{ $penjualan->total }}</td>
                    {{-- <td>
                        <a href="{{route('penjualan.edit', $penjualan->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td><form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
        $('#data_users_reguler').DataTable({
            dom: 'lBfrtip',
            buttons: [
            'copy', 'excel', 'pdf', 'print'
            ]
        });
    } );
    </script>
@stop

