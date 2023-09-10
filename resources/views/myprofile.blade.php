@extends('layout.admin_main')
@section('content')

<form class="float-end mt-4 me-5" action="/profile/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$user->id}}"> <br>
    <label>Nama : </label>
    <input type="text" name="name" value="{{$user->name}}"> <br>

    <label>Username : </label>
    <input type="text" name="username" value="{{$user->username}}"> <br>

    <label>Email : </label>
    <input type="text" name="email" value="{{$user->email}}"> <br>

    <label>Password baru : </label>
    <input type="text" name="password_baru" value=""> <br>

    <label>Nomor HP : </label>
    <input type="text" name="contact_phone" value="{{$user->contact_phone}}"> <br>

    <label>Deskripsi : </label>
    <textarea type="text" name="Deskripsi">{{$user->descript}}</textarea><br>

    <label>Foto : </label>
    <input  name="foto" value="{{$user->profile_photo_path}}"> <br>

    <button type="submit" name="simpan" >Simpan</button>

</form>
    {{-- <div class="text-end">
        <h4 class="mt-5"> Nama : {{ auth()->user()->name }}</h4>
        <h4> Username : {{ auth()->user()->username }}</h4>
        <h4> email : {{ auth()->user()->email }}</h4>
        <h4> Nomer HP : {{ auth()->user()->contact_phone }}</h4>
        <h4> Deskripsi : {{ auth()->user()->descript }}</h4>
        <h4> Foto : {{ auth()->user()->profile_photo_path }}</h4>
    </div> --}}
@endsection
