@extends('layouts.main')

@section('container')


<div class="pagetitle mt-3">
   <div class="container">
      <div class="row align-items-center">
         <div class="col">
            <h1>Buat Janji Temu</h1>
         </div>
      </div>
   </div>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif



<div class="row">
      <div class="card col-md-12 mt-2 pb-4">
         <div class="card-body">
            <form class="row g-3 mt-3" method="GET" action="{{route('buatJanjiTemuSubmit')}}">
              <div class="col-md-12"> <label for="nama" class="form-label">Nama :</label> <input type="text" class="form-control" id="nama" name="nama" @if(isset($info[0]->nama)) value="{{ $info[0]->nama }}" @else value="{{ old('nama') }}" @endif readonly></div>
              <div class="col-md-12"> <label for="alamat" class="form-label">Alamat :</label> <input type="text" class="form-control" id="kontak" name="alamat" @if(isset($info[0]->alamat)) value="{{ $info[0]->alamat }}" @else value="{{ old('alamat') }}" @endif readonly></div>
              <div class="col-md-12"> <label for="kontak" class="form-label">Kontak :</label> <input type="text" class="form-control" id="kontak" name="kontak" @if(isset($info[0]->no_hp)) value="{{ $info[0]->no_hp }}" @else value="{{ old('kontak') }}" @endif readonly></div>
              <div class="col-md-12"> <label for="waktu" class="form-label">Waktu :</label> <input type="datetime-local" class="form-control" id="waktu" name="waktu" value="{{ old('waktu') }}" required></div>
              <div class="col-md-12">
                  <label for="dokter" class="form-label">Dokter :</label> 
                  <select id="dokter" class="form-select" name="dokter" required>
                      <option>Pilih Dokter!</option>
                      @foreach ($dokter as $dr)
                        <option value="{{ $dr->nama }}">{{ $dr->nama }}</option>

                      @endforeach
                  </select>
              </div>
            <div class="text-center mb-5 mt-4"> <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin?')">Submit</button> <button type="reset" class="btn btn-secondary">Reset</button></div>
          </form>
         </div>
      </div>
</div>
  
@endsection