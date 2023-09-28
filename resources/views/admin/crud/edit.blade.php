@extends('admin.home')
@section('container')
    
    <style>
        .edit {
            width: 100%;
            justify-content: center;
            margin: 50px 10px;
            padding: 0 20px;
        }
        .col-md-6{
            margin-bottom: 20px;
        }
        .kategori {
        display: flex;
        flex-direction: column;       
    }

    .kategori select {
        height: 2.5rem;
        text-align: center;
    }
    </style>
    <div class="edit">
        <h1 align="center">Edit Data Bus </h1>
        <form class="row" action="/admin/data-bus/update/{{$bus->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="">Nama Bus</label>
                <input type="text" class="form-control" id="nama_bus" name="nama_bus" value="{{old('nama_bus',$bus->nama_bus)  }}" >
            </div>
            <div class="col-md-6 kategori">
                <label for="tujuan_id" class="form-label">Tujuan Bus</label>
                <select class="form-select" name="tujuan_id" id="tujuan_id" >
                    @foreach ($tujuan as $class)
                        @if(old('tujuan_id',$bus->tujuan_id) == $class->id)
                            <option value="{{ $class->id }}" selected>{{ $class->kota_asal }} - {{ $class->kota_tujuan }}</option>
                        @else
                        <option value="{{ $class->id }}">{{ $class->kota_asal }} - {{ $class->kota_tujuan }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga' , $bus->harga)  }}" >
            </div>
            <div class="col-md-6">
                <label for="">Kapasitas</label>
                <input type="text" class="form-control" id="jumlah_kursi" name="jumlah_kursi" value="{{ old('jumlah_kursi' , $bus->jumlah_kursi)  }}" >
            </div>
            <a href="/admin/data-bus" type="button" class="btn btn-secondary mx-2" >Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
