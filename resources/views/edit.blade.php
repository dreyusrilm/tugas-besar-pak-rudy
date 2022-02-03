@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Siswa
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
      <form method="post" action="{{ route('siswa.update', $siswa->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nik">NIK:</label>
              <input type="text" class="form-control" name="nik" value="{{$siswa->nik}}"/>
          </div>
          <div class="form-group">
              <label for="name">NAME :</label>
              <input type="text" class="form-control" name="name" value="{{$siswa->name}}"/>
          </div>
          <div class="form-group">
              <label for="kelas">KELAS  :</label>
              <input type="text" class="form-control" name="kelas" value="{{$siswa->kelas}}"/>
          </div>
          <div class="form-group">
            <label for="alamat">ALAMAT  :</label>
            <input type="text" class="form-control" name="alamat" value="{{$siswa->alamat}}"/>
        </div>
        <div class="form-group">
            <label for="jeniskelamin">JENIS KELAMIN  :</label>
            <input type="text" class="form-control" name="jeniskelamin" value="{{$siswa->jeniskelamin}}"/>
        </div>
          <button type="submit" class="btn btn-primary">Update Data Siswa</button>
      </form>
  </div>
</div>
@endsection