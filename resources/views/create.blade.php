@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Data Siswa
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('siswa.store') }}">
          <div class="form-group">
              @csrf
              <label for="nik">NIK:</label>
              <input type="text" class="form-control" name="nik"/>
          </div>
          <div class="form-group">
              <label for="name">NAME :</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="kelas">KELAS :</label>
              <input type="text" class="form-control" name="kelas"/>
          </div>
          <div class="form-group">
            <label for="alamat">ALAMAT :</label>
            <input type="text" class="form-control" name="alamat"/>
        </div>
        <div class="form-group">
            <label for="jeniskelamin">Jenis Kelamin :</label>
            <input type="text" class="form-control" name="jeniskelamin"/>
        </div>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
  </div>
</div>
@endsection