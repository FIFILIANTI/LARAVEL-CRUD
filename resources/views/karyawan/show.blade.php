@extends('layout/index')

@section('title','Detail karyawan')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Detail Karyawan</h1>
            <div class="row no-gutters">
    
  
    <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title"><b>{{ $karyawan->nik }}</b></h4>
              <p class="card-text">{{ $karyawan->nama }}</p>
              <p class="card-text">{{ $karyawan->alamat }}</p>
              <p class="card-text">{{ $karyawan->jabatan }}</p>
              <p class="card-text">{{ $karyawan->email }}</p>


              <a href="{{ $karyawan->id }}/edit" class="btn btn-primary">Edit</a>
              
              <form action="{{ $karyawan->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/karyawan" class="card-link">back<<</a>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection
   