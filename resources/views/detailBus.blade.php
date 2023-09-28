@extends('app')
@section('container')

<style>
    .detail-card {
        width: 70%;
        margin: auto;
        margin-top: 20px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        background-color: #fff;
        border-radius: 5px;
    }

    .detail-title {
        font-family: 'Popins', sans-serif;
        font-weight: 600;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .detail-info {
        font-family: 'Popins', sans-serif;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .detail-price {
        font-family: 'Popins', sans-serif;
        font-weight: 600;
        font-size: 20px;
        color: #007BFF; 
    }
</style>

<div class="detail-card">
    <h2 class="detail-title">{{ $bus->nama_bus }}</h2>
    <p class="detail-info">Tujuan: {{ $bus->tujuan->kota_asal }} - {{ $bus->tujuan->kota_tujuan }}</p>
    <p class="detail-info">Harga: Rp{{ number_format($bus->harga, 0, ',', '.') }}</p>
    <p class="detail-info">Jumlah Kursi Tersedia: {{ $bus->jumlah_kursi }}</p>

    <a href="/" class="btn btn-secondary">Kembali</a>
    @if (Auth::check())
        <a href="{{route('pesan-tiket' , ['bus_id' => $bus->id] )}}" class="btn btn-primary">Pesan Tiket</a>
    @else
        <div class="alert alert-warning mt-3" role="alert">
            Anda harus <a href="/login">login</a> untuk memesan tiket.
        </div>
    @endif
</div>


@endsection
