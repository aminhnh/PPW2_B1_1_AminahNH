@extends('layouts.layout')

@section('title', 'Daftar Barang')

@section('content')

<h1>Daftar barang yang tersedia: </h1>

<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach($daftar_barang as $barang)
        <tr>
            <td>{{ $barang->id }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->harga }}</td>
            <td>{{ $barang->stok }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection