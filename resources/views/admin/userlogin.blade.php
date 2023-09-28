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
        <h3 style="text-align: center;margin-bottom:30px;">Data User Login</h3>
        <table class="table table-striped table-primary  text-center ">
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
            <tr class="text-center">
                <th>
                    <h5>Username</h5>
                </th>
                <th>
                    <h5>Email</h5>
                </th>
           </tr>
            <tbody>
                @if ($user->isEmpty())
                    <tr class="text-center">
                        <td colspan="11">Data Kosong</td>
                    </tr>
                @endif
                @foreach ($user as $data)
                    <tr>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
