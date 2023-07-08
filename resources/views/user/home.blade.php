@extends('layouts.main')

@section('container')
<div class="pagetitle mt-3">
   <div class="container">
      <div class="row align-items-center">
         <div class="col">
            <h1>Home</h1>
         </div>
      </div>
   </div>
</div>



{{-- @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif --}}

<div class="row">
      <div class="card col-md-12 mt-2 pb-4">
         <div class="card-body">
             <h5 class="card-title">Tentang "Dokter Gigi"</h5>
             <div class="table-container border" style="border-radius: 20px">
               <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                      aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                      aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                      aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner" style="border-radius: 20px">
                    <div class="carousel-item active">
                      <img src="{{asset('admintemplate/img/slidedokter1.jpg')}}" class="d-block w-100" alt="gambar1" style="height:500px">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-black font-weight-bold" style="-webkit-text-stroke: 1px black; text-stroke: 1px black;">Senyum sehat dimulai dari sini. Dokter gigi membantu menjaga kesehatan gigi dan mulut Anda.</h3>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('admintemplate/img/slidedokter2.jpeg')}}" class="d-block w-100" alt="gambar2" style="height:500px">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-black font-weight-bold" style="-webkit-text-stroke: 1px black; text-stroke: 1px black;">Senyum sehat dimulai dari sini. Dokter gigi membantu menjaga kesehatan gigi dan mulut Anda.</h3>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('admintemplate/img/slidedokter3.jpeg')}}" class="d-block w-100" alt="gambar3" style="height:500px">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-black font-weight-bold" style="-webkit-text-stroke: 1px black; text-stroke: 1px black;">Senyum sehat dimulai dari sini. Dokter gigi membantu menjaga kesehatan gigi dan mulut Anda.</h3>

                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div>

            <div class="text-justify mt-4 mb-4 animate__animated animate__fadeIn">

                <p style="text-align: justify">Dokter gigi adalah seorang dokter yang khusus mempelajari ilmu kesehatan dan penyakit pada gigi dan mulut. Seorang dokter gigi memiliki kompetensi atau keahlian dalam mendiagnosis, mengobati, dan memberikan edukasi tentang pencegahan berbagai masalah kesehatan gigi, gusi, dan mulut.Banyak orang beranggapan bahwa mereka hanya perlu ke dokter gigi pada saat sedang mengalami keluhan pada gigi dan mulut. Padahal, pemeriksaan gigi dan mulut perlu rutin dilakukan setidaknya 2 kali setahun meski tidak ada keluhan atau gangguan pada gigi dan mulut yang dirasakan.</p>
                <p>Kapan Harus Memeriksakan Gigi?</p>                
                <p style="text-align: justify">Pada anak usia 6 bulan sampai 1 tahun, pemeriksaan gigi harus sudah dilakukan sejak gigi pertamanya muncul. Lalu untuk anak di atas satu tahun hingga remaja, pemeriksaan gigi perlu dilakukan secara rutin setidaknya setiap 6 bulan sekali.Sementara bagi orang dewasa, frekuensi pemeriksaan ditentukan sesuai kondisi gigi. Namun rata-rata orang dewasa melakukan pemeriksaan gigi setiap 6 bulan sekali.</p>
                <p>Pemeriksaan gigi juga perlu segera dilakukan jika terdapat gejala atau gangguan pada gigi, gusi, dan mulut berikut ini:</p>                
                <ul>
                    <li>Sakit gigi</li>
                    <li>Gigi sensitif</li>
                    <li>Gusi terasa nyeri atau mengeluarkan darah</li>
                    <li>Sariawan yang tidak kunjung membaik</li>
                    <li>Bau napas</li>
                    <li>Rahang terasa nyeri atau muncul suara saat diregangkan</li>
                    <li>Mulut kering</li>
                    <li>Gigi retak atau copot</li>
                    <li>Terdapat benjolan pada gusi, lidah, atau mulut</li>
                </ul>                
                <p>Oleh karena itu, penting bagi Anda melakukan pemeriksaan kesehatan gigi secara rutin ke dokter gigi. Selain untuk menjaga kondisi gigi, pemeriksaan gigi juga bertujuan untuk mendeteksi sedini mungkin jika ada masalah pada gigi, sehingga penanganannya dapat segera dilakukan.</p>

                
           </div>


                 
         </div>
      </div>
</div>
@endsection