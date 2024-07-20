@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
@endsection

@section('title', 'Halaman Petugas')

@section('header', 'Petugas')

@section ('content')
    <a href="{{ route('petugas.create') }}" class="btn btn-brown mb-2">Tambah Petugas</a>
    <table id="petugasTable" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama petugas</th>
                <th>Username</th>
                <th>Telp</th>
                <th>Level</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $k => $v)
            <tr>
                <td>{{ $k += 1 }}</td>
                <td>{{ $v->nama_petugas }}</td>
                <td>{{ $v->username }}</td>
                <td>{{ $v->telp }}</td>
                <td>{{ $v->level }}</td>
                <td> <a href="{{ route('petugas.edit', $v->id_petugas) }}" style="text-decoration: underline">Lihat</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>
        new DataTable('#petugasTable');
    </script>
@endsection