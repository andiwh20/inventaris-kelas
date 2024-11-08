@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="/home" class="btn btn-warning">Kembali</a>
                    <hr />

                    <!-- Perbaikan di sini: hapus spasi sebelum 'method' -->
                    <form action="/simpan" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="namabarang">Nama Barang</label>
                            <input type="text" class="form-control" id="namabarang" name="namabarang" required />
                        </div>
                        <div class="mb-3">
                            <label for="hargabarang">Harga Barang</label>
                            <input type="number" class="form-control" id="hargabarang" name="hargabarang" min="1" required />
                        </div>
                        <div class="mb-3">
                            <label for="stokbarang">Stok Barang</label>
                            <input type="number" class="form-control" id="stokbarang" name="stokbarang" min="1" required />
                        </div>
                        <button class="btn btn-primary" type="submit">SIMPAN DATA</button>
                    </form>

                    <hr />

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
