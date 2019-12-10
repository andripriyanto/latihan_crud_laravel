@extends('users.layout')
 
@section('konten')
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif
  <h1>Selamat Datang di CRUD Laravel 6</h1>
  <a href="{{ route('users.create')}}" class="btn btn-primary">Tambah</a></td><br><br>
  <table class="table table-striped border text-center">
    <thead>
        <tr>
          <td>No</td>
          <td>Nama</td>
          <td>Tempat Lahir</td>
          <td>Tanggal Lahir</td>
          <td>Gender</td>
          <td>Alamat</td>
          <td colspan="2">Kelola Data</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nama}}</td>
            <td>{{$user->tempat_lahir}}</td>
            <td>{{$user->tanggal_lahir}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->alamat}}</td>
            <td><a href="{{ route('users.edit', $user->id)}}" class="btn btn-warning">Edit</a></td> // tambah code berikut
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection