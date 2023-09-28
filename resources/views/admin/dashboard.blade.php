@extends('admin.home')
@section('container')

<style>
    .container{
        width: 100%;
        justify-content: center;
        margin: 50px 10px;
        padding: 0 20px;
    }
</style>

<div class="container">
    <h1>Dashboard Admin PO CAN Travel</h1>
    <p>Selamat datang, {{  auth('admins')->user()->username }}!</p>
    <p>Anda berhasil login sebagai admin.</p>

</div>
@endsection