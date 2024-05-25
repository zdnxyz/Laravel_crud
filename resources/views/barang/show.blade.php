@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Merek') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('barang.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <h4>{{ $barang->nama_barang }}</h4>
                    <h4>{{ $barang->harga }}</h4>
                    <h4>{{ $barang->stok }}</h4>
                    <h4>{{ $barang->id_merek }}</h4>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection