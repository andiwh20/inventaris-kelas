@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <a href="/tambah" class="btn btn-primary">+ Tambah Barang</a>
                <hr />
                <table class="table-bordered  table-hover table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($semuabarang as $barang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang->nama }}</td>
                <td>{{ $barang->harga }}</td>
                <td>{{ $barang->stok }}</td>
                <td>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Tidak ada barang yang tersedia.</td>
            </tr>
        @endforelse
    </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
