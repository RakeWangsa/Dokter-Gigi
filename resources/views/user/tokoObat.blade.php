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
          <h1>Toko Obat</h1>
       </div>
       {{-- <div class="col-auto">
          <a class="btn btn-primary" href="/JanjiTemu/Buat"><i class="bi bi-person-fill-add me-2"></i><span>Buat Janji Temu</span></a>
       </div> --}}
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
            <form method="GET" action="{{route('checkout')}}">
             <h5 class="card-title">List Obat</h5>

               <div class="container text-center">
                  <div class="row">
                     <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[0]->nama_obat }}</p>
                        <p>Rp. {{ $obat[0]->harga_obat }}</p>
                        <input name="obat1" type="number" min="0">
                     </div>
                     <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[1]->nama_obat }}</p>
                        <p>Rp. {{ $obat[1]->harga_obat }}</p>
                        <input name="obat2" type="number">
                     </div>
                     <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[2]->nama_obat }}</p>
                        <p>Rp. {{ $obat[2]->harga_obat }}</p>
                        <input name="obat3" type="number">
                     </div>
                     <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[3]->nama_obat }}</p>
                        <p>Rp. {{ $obat[3]->harga_obat }}</p>
                        <input name="obat4" type="number">
                     </div>


                    <!-- Force next columns to break to new line -->
                    <div class="w-100"></div>
                
                    <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[4]->nama_obat }}</p>
                        <p>Rp. {{ $obat[4]->harga_obat }}</p>
                        <input name="obat5" type="number">
                     </div>
                     <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[5]->nama_obat }}</p>
                        <p>Rp. {{ $obat[5]->harga_obat }}</p>
                        <input name="obat6" type="number">
                     </div>
                     <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[6]->nama_obat }}</p>
                        <p>Rp. {{ $obat[6]->harga_obat }}</p>
                        <input name="obat7" type="number">
                     </div>
                     <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[7]->nama_obat }}</p>
                        <p>Rp. {{ $obat[7]->harga_obat }}</p>
                        <input name="obat8" type="number">
                     </div>

                    <!-- Force next columns to break to new line -->
                    <div class="w-100"></div>
                
                    <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[8]->nama_obat }}</p>
                        <p>Rp. {{ $obat[8]->harga_obat }}</p>
                        <input name="obat9" type="number">
                     </div>
                     <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[9]->nama_obat }}</p>
                        <p>Rp. {{ $obat[9]->harga_obat }}</p>
                        <input name="obat10" type="number">
                     </div>
                     <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[10]->nama_obat }}</p>
                        <p>Rp. {{ $obat[10]->harga_obat }}</p>
                        <input name="obat11" type="number">
                     </div>
                     <div class="col-6 col-sm-3 mb-4">
                        <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="mt-4" style="width: 100%; height: auto;">
                        <p class="fw-bold">{{ $obat[11]->nama_obat }}</p>
                        <p>Rp. {{ $obat[11]->harga_obat }}</p>
                        <input name="obat12" type="number">
                     </div>
                  </div>
                </div>
               <button class="btn btn-danger" type="reset">Reset</button>
               <button class="btn btn-primary" type="submit"><i class="bi bi-cart-check-fill"></i> Checkout</button>
            </form>
         </div>
      </div>
</div>


@endsection