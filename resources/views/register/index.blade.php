@include('layouts.head')

<main>
   <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      @if (session()->has('success'))
         <div class="alert alert-success alert-dismissible fade show justify-content-center col-4 mb-4" role="alert">
         {{ session('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif

      @if (session()->has('loginError'))
         <div class="alert alert-danger alert-dismissible fade show justify-content-center col-4 mb-4" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
               <div class="card mb-3">
                  <div class="card-body login">
                     <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">REGISTER</h5>
                     </div>
                     <form action="/register" method="post">
                        @csrf
                        <div class="form-floating">
                           <input type="text" name="nama" class="form-control rounded-top 
                               @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" required value="{{ old('nama') }}">
                           <label for="nama">Nama</label>
                           @error('nama')
                               <div class="invalid-feedback">
                                   {{ $message }}
                               </div>
                           @enderror
                       </div>
   
                       <div class="form-floating">
                           <input type="text" name="ttl" class="form-control rounded-top 
                              @error('ttl') is-invalid @enderror" id="ttl" placeholder="TTL" required value="{{ old('ttl') }}">
                           <label for="ttl">TTL</label>
                           @error('ttl')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>

                        <div class="form-floating">
                           <input type="text" name="alamat" class="form-control rounded-top 
                              @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" required value="{{ old('alamat') }}">
                           <label for="alamat">Alamat</label>
                           @error('alamat')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>

                        <div class="form-floating">
                           <input type="text" name="no_hp" class="form-control rounded-top 
                              @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="No HP" required value="{{ old('no_hp') }}">
                           <label for="no_hp">No HP</label>
                           @error('no_hp')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>
                    
                       <div class="form-floating">
                           <input type="email" name="email" class="form-control
                               @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                           <label for="email">Email address</label>
                           @error('email')
                               <div class="invalid-feedback">
                                   {{ $message }}
                               </div>
                           @enderror
                       </div>
   
                       <div class="form-floating">
                           <input type="password" name="password" class="form-control rounded-bottom
                               @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                           <label for="password">Password</label>
                           @error('password')
                               <div class="invalid-feedback">
                                   {{ $message }}
                               </div>
                           @enderror
                       </div>
                                 
                        <div class="col-12 mt-4 mb-2"> <button class="btn btn-primary w-100" type="submit">Register</button></div>
                        <p class="small">Sudah Punya Akun? <a href="/login">Login</a></p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </section>
   </div>
</main>

