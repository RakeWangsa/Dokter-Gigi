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
          <h1>Janji Temu</h1>
       </div>
       <div class="col-auto">
          <a class="btn btn-primary" href="/JanjiTemu/Buat"><i class="bi bi-person-fill-add me-2"></i><span>Buat Janji Temu</span></a>
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
                        </tr>
                      @endforeach
                    @else
                      <tr>
                        <td colspan="4" class="text-center">Tidak ada janji</td>
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
            {{-- <table>
               <thead>
                 <tr>
                   <th scope="col" class="text-center">No</th>
                   <th scope="col" class="text-center">ID User</th>
                   <th scope="col" class="text-center">Nama</th>
                   <th scope="col" class="text-center">Alamat</th>
                   <th scope="col" class="text-center">Kontak</th>
                   <th scope="col" class="text-center">Dokter</th>
                   <th scope="col" class="text-center">Waktu</th>
                 </tr>
               </thead>
               
               <tbody>
                  @php($no=1)
                 @if(count($janji) > 0)
                   @foreach($janji as $item)
                     <tr>
                       <td scope="row" class="text-center">{{ $no++ }}</td>
                       <td class="text-center">{{ $item->id_user }}</td>
                       <td class="text-center">{{ $item->nama }}</td>
                       <td class="text-center">{{ $item->alamat }}</td>
                       <td class="text-center">{{ $item->kontak }}</td>
                       <td class="text-center">{{ $item->nama_dokter }}</td>
                       <td class="text-center">{{ $item->waktu }}</td>
                     </tr>
                   @endforeach
                 @else
                   <tr>
                     <td colspan="4" class="text-center">Tidak ada janji</td>
                   </tr>
                 @endif
               </tbody>
             </table> --}}
         </div>
      </div>
   </div>
</div>

@endsection