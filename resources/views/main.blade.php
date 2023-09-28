@extends('app')
@section('container')
    <style>
        .tittle {
            text-align: baseline;
            margin-top: 20px;
            margin-left: 25px;
            margin-bottom: 20px;
            font-family: 'Popins', sans-serif;
            font-weight: 600;
            font-size: 30px;
        }

        .row {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: auto;
            padding: 0 20px;

        }

        .card {
            width: 30%;
            margin-bottom: 40px
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: contain;

        }

        .card-title {
            text-align: left;
            font-family: 'Popins', sans-serif;
            font-weight: 600;
            font-size: 15px;
        }

        .search-input {
            width: 70%;
            margin-right: 10px;
        }

        .form-sc {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
    </style>
  
    <div class="row mt-2 mb-2"> 
         @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif
        <div class="col-md-6">
            <h2 class="tittle">Daftar Bus</h2>
        </div>
        <div class="col-md-6">
            <div class="filter-section">
                <form action="/search" method="GET" class="form-sc">
                    <input type="text" name="search" id="search" class="form-control search-input"
                        placeholder="Cari berdasarkan nama bus...">
                    <button type="submit" class="btn btn-primary btn-search">Cari</button>
                </form>
            </div>
        </div>
    </div>


    <div class="row">
        @if ($bus->isEmpty())
        <p class="text-center">Tidak ada hasil yang cocok </p>
        @else
            @foreach ($bus as $class)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $class->nama_bus }}</h5>
                        <p class="card-text">{{ $class->tujuan->kota_asal }} - {{ $class->tujuan->kota_tujuan }}</p>
                        <a href="/detail-bus/{{ $class->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach         
        @endif
    </div>
@endsection
