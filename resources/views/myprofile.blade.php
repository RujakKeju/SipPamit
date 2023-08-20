@extends('layout.admin_main')
@section('content')
    <div class="text-end">
        <h4 class="mt-5"> Nama : {{ auth()->user()->name }}</h4>
        <h4> Username : {{ auth()->user()->username }}</h4>
        <h4> email : {{ auth()->user()->email }}</h4>
        <h4> Nomer HP : {{ auth()->user()->contact_phone }}</h4>
        <h4> Deskripsi : {{ auth()->user()->descript }}</h4>
        <h4> Foto : {{ auth()->user()->profile_photo_path }}</h4>
    </div>
@endsection
