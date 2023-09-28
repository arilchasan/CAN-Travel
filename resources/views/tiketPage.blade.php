@extends('app')
@section('container')

<style>
    .col-md-4 {
       padding: 40px;
    }
    .alert {
        width: 60%;
        margin: auto;
    }
    .btn-secondary {
        margin: 0 50px;
    }
</style>

<h2 class="text-center" style="margin:20px 10px;">Daftar Tiket yang Telah Dibeli</h2>

<div class="row">
    @if ($booking->isEmpty())
        <div class="alert alert-warning col-lg-12" role="alert">
            Anda belum memesan tiket.
        </div>
    @else
    @foreach ($booking as $pesanan)
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $pesanan->bus->nama_bus }}</h5>
                <p class="card-text">Tujuan: {{ $pesanan->bus->tujuan->kota_asal }} - {{ $pesanan->bus->tujuan->kota_tujuan }}</p>
                <p class="card-text">Harga: Rp{{ number_format($pesanan->bus->harga, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>

<a href="/" class="btn btn-secondary">Kembali</a>

@endsection

