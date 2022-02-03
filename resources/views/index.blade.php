@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>NIK</td>
          <td>Name</td>
          <td>KELAS</td>
          <td>ALAMAT</td>
          <td>JENIS KELAMIN</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $siswa)
        <tr>
            <td>{{$siswa->id}}</td>
            <td>{{$siswa->nik}}</td>
            <td>{{$siswa->name}}</td>
            <td>{{$siswa->kelas}}</td>
            <td>{{$siswa->alamat}}</td>
            <td>{{$siswa->jeniskelamin}}</td>
            <td><a href="{{ route('siswa.edit',$siswa->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('siswa.destroy', $siswa->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection