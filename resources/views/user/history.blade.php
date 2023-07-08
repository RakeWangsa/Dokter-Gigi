@extends('layouts.main')

@section('container')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="pagetitle mt-3">
  <div class="container">
    <div class="row align-items-center">
       <div class="col">
          <h1>History Saya</h1>
       </div>
    </div>
 </div>
</div>


<style>
   .table-container {
     max-height: 300px;
     overflow-y: scroll;
   }
   
   table {
     width: 100%;
     border-collapse: collapse;
   }
   
   th, td {
     padding: 8px;
     text-align: left;
     border-bottom: 1px solid #ddd;
   }
   
   th {
     background-color: #c3c3c3;
     position: sticky;
     top: 0;
   }
   
   </style>



<div class="row">
      <div class="card col-md-12 mt-2 pb-4">
         <div class="card-body">
             <h5 class="card-title">History Janji Temu</h5>
             <div class="table-container border">
               <table>
                  <thead>
                    <tr>
                      <th scope="col" class="text-center">No</th>
                      <th scope="col" class="text-center">Nama</th>
                      <th scope="col" class="text-center">Alamat</th>
                      <th scope="col" class="text-center">Kontak</th>
                      <th scope="col" class="text-center">Dokter</th>
                      <th scope="col" class="text-center">Waktu</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                     @php($no=1)
                    @if(count($janjiku) > 0)
                      @foreach($janjiku as $item)
                        <tr>
                          <td scope="row" class="text-center">{{ $no++ }}</td>
                          <td class="text-center">{{ $item->nama }}</td>
                          <td class="text-center">{{ $item->alamat }}</td>
                          <td class="text-center">{{ $item->kontak }}</td>
                          <td class="text-center">{{ $item->nama_dokter }}</td>
                          <td class="text-center">{{ $item->waktu }}</td>
                          <td class="text-center"><a class="btn btn-secondary" a href="{{ route('cetakJanji', ['id' => base64_encode($item->id)]) }}">Cetak</a></td>
                        </tr>
                      @endforeach
                    @else
                      <tr>
                        <td colspan="8" class="text-center">Tidak ada janji</td>
                      </tr>
                    @endif
                  </tbody>
                </table>
            </div>
         </div>
      </div>
</div>

<div class="row">
   <div class="card col-md-12 mt-2 pb-4">
      <div class="card-body">
          <h5 class="card-title">History Pembelian Obat</h5>
          <div class="table-container border">
            <table>
               <thead>
                 <tr>
                   <th scope="col" class="text-center">No</th>
                   <th scope="col" class="text-center">Nama</th>
                   <th scope="col" class="text-center">Obat</th>
                   <th scope="col" class="text-center">Total Harga</th>
                   <th scope="col" class="text-center">Waktu</th>
                   <th scope="col" class="text-center">Action</th>
                 </tr>
               </thead>
               
               <tbody>
                  @php($no=1)
                 @if(count($pembelianku) > 0)
                   @foreach($pembelianku as $item)
                     <tr>
                       <td scope="row" class="text-center">{{ $no++ }}</td>
                       <td class="text-center">{{ $item->nama }}</td>
                       <td class="text-center">{{ $item->nama_obat }}</td>
                       <td class="text-center">{{ $item->total_harga }}</td>
                       <td class="text-center">{{ $item->waktu }}</td>
                       <td class="text-center"><a class="btn btn-secondary" a href="{{ route('cetakPembelian', ['id' => base64_encode($item->id)]) }}">Cetak</a></td>
                     </tr>
                   @endforeach
                 @else
                   <tr>
                     <td colspan="8" class="text-center">Tidak ada pembelian</td>
                   </tr>
                 @endif
               </tbody>
             </table>
         </div>
      </div>
   </div>
</div>

@endsection