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
                        <a href="{{ route('merek.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <h4>{{ $merek->nama_merek }}</h4>
                    <p class="tmt-3">
                        {!! $merek->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection