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
                      <img src="{{asset('admintemplate/img/slides-1.jpg')}}" class="d-block w-100" alt="gambar1" style="height:500px">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-warning font-weight-bold" style="-webkit-text-stroke: 1px yellow; text-stroke: 1px yellow;">Vestibulum fermentum enim eu rutrum gravida. Etiam non gravida neque, vitae scelerisque nisl.</h3>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('admintemplate/img/slides-2.jpg')}}" class="d-block w-100" alt="gambar2" style="height:500px">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-warning font-weight-bold" style="-webkit-text-stroke: 1px yellow; text-stroke: 1px yellow;">Quisque pellentesque mauris a sapien commodo, ut tempus metus gravida. Sed vehicula laoreet tortor eget commodo.</h3>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('admintemplate/img/slides-3.jpg')}}" class="d-block w-100" alt="gambar3" style="height:500px">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-warning font-weight-bold" style="-webkit-text-stroke: 1px yellow; text-stroke: 1px yellow;">Maecenas non cursus ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h3>

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
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet ex sit amet luctus sagittis. Proin iaculis velit ut est tincidunt, non laoreet erat eleifend. Nullam sed magna eget est rhoncus pulvinar. Suspendisse sit amet nisi sit amet nunc tristique sollicitudin. Ut id commodo purus, vitae malesuada metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ac ante id dui iaculis accumsan. Nulla facilisi. Morbi lacinia justo ac metus bibendum, a laoreet elit auctor. Aenean fermentum posuere purus, a imperdiet lacus dapibus a. Donec condimentum ipsum sit amet luctus convallis. Nulla bibendum purus at lorem auctor, nec convallis dolor eleifend. Pellentesque in elit pretium, venenatis lacus a, semper est. Quisque venenatis volutpat eleifend. Integer venenatis libero vitae risus malesuada rutrum.
                Duis pretium est ac justo blandit pulvinar. Suspendisse lobortis mauris nec odio tincidunt, vel condimentum massa eleifend. Morbi fringilla tincidunt ex, sed tempus metus placerat ut. Vestibulum iaculis facilisis magna, nec gravida enim ullamcorper a. Sed varius ex nisl, ut viverra mi venenatis a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur et justo sed mi finibus malesuada. In rutrum tellus id diam mattis, id condimentum lacus ullamcorper. Suspendisse interdum dui vel cursus consectetur. Morbi nec tortor et lectus consectetur aliquam. Nulla facilisi.</p>
           </div>

           {{-- <h5 class="card-title">Cara Kerja "Sewa Supir"</h5> --}}
           {{-- <a class="btn btn-primary" href="/pesananSaya/buatPesanan">Sewa Sekarang!</a> --}}
                 
         </div>
      </div>
</div>
@endsection