@extends('admin.home')
@section('container')
    
    <style>
        .detail {
            width: 100%;
            justify-content: center;
            margin: 50px 10px;
            padding: 0 20px;
        }
        .col-md-6{
            margin-bottom: 20px;
        }
    </style>
    <div class="detail">
        <h1 align="center">Detail Bus </h1>
        <form class="row">
            <div class="col-md-6">
                <label for="">Nama Bus</label>
                <input type="text" class="form-control" id="" name="" value="{{ $bus->nama_bus }}" readonly>
            </div>
            <div class="col-md-6">
                <label for="">Tujuan Bus</label>
                <input type="text" class="form-control" id="" name="" value="{{ $bus->tujuan->kota_asal }} - {{ $bus->tujuan->kota_tujuan }}" readonly>
            </div>
            <div class="col-md-6">
                <label for="">Harga</label>
                <input type="text" class="form-control" id="" name="" value="Rp{{ number_format($bus->harga, 0, ',', '.') }}" readonly>
            </div>
            <div class="col-md-6">
                <label for="">Kapasitas</label>
                <input type="text" class="form-control" id="" name="" value="{{ $bus->jumlah_kursi }}" readonly>
            </div>
            <a href="/admin/data-bus" type="button" class="btn btn-secondary mx-2" >Kembali</a>
        </form>
    </div>
@endsection
