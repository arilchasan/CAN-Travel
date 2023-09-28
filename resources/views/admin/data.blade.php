@extends('admin.home')
@section('container')
    <style>
        .main-wrapper {
            width: 100%;
            justify-content: center;
            margin: 50px 10px;
            padding: 0 20px;
        }

        h5 {
            font-family: 'Popins', sans-serif, ;
            font-weight: 400;
            font-size: 18px;
        }
    </style>
    <div class="main-wrapper">
        <h3 style="text-align: center">Data Bus</h3>
        <table class="table table-primary table-striped text-center ">
            @if (session()->has('success'))
            <div class="alert alert-success col-lg-12" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger col-lg-12" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            <a class="btn btn-outline-primary" href="/admin/data-bus/tambah" style="margin-bottom:20px">Tambah Data</a>
            <tr class="text-center">
                <th>
                    <h5>Nama Bus</h5>
                </th>
                <th>
                    <h5>Tujuan</h5>
                </th>
                <th>
                    <h5>Harga</h5>
                </th>
                <th>
                    <h5>Kapasitas</h5>
                </th>

                <th>
                 
                </th>
                <th>
                    <h5>Opsi</h5>
                </th>
                <th>
                   
                </th>

            </tr>
            <tbody>
                @if ($bus->isEmpty())
                    <tr class="text-center">
                        <td colspan="11">Data Kosong</td>
                    </tr>
                @endif
                @foreach ($bus as $data)
                    <tr>
                        <td>{{ $data->nama_bus }}</td>
                        <td>{{ $data->tujuan->kota_asal }} - {{ $data->tujuan->kota_tujuan }}</td>
                        <td>Rp{{ number_format($data->harga, 0, ',', '.') }}</td>
                        <td>{{ $data->jumlah_kursi }} Kursi</td>
                        <td>
                            <a class="btn btn-outline-success" href="/admin/data-bus/detail/{{ $data->id }}">Detail</a>
                        </td>
                        <td>
                            <a class="btn btn-outline-dark" href="/admin/data-bus/edit/{{ $data->id }}">Edit</a>
                        </td>
                        <td>
                            <form action="/admin/data-bus/hapus/{{ $data->id }}"method="post" style="width: 30%">
                                @method('delete')
                                @csrf
                                <button class="btn btn-outline-danger"
                                    onclick="return confirm('Yakin Mau Hapus ?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
