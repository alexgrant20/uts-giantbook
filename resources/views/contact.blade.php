@extends('layout.main')

@section('title', 'Contact')

@section('content')
   @if (session()->has('success'))
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         <strong>Thank you</strong> for your subscription!
      </div>
   @endif
   <div class="shadow p-5 d-flex align-items-center">
      <div>
         <img src="{{ asset('image/logo.png') }}" alt="" width="250px" height="250px">
         <h2>BigBook</h2>
         <address>
            <div>Jalan Pembangunan Baru Raya</div>
            <div>Kompleks Pertokan Emerald Blok III/12</div>
            <div>Bintaro, Tangerang Selatan</div>
            <div>Indonesia</div>
         </address>
         <p class="d-flex align-items-center gap-2">
            <i class="fa-solid fa-clock fs-5"></i>
            <span class="fw-semibold">08.00 - 20.00</span>
         </p>
         <p class="d-flex align-items-center gap-2">
            <i class="fa-solid fa-phone fs-5"></i>
            <span class="fw-semibold">021-088899776655</span>
         </p>
         <p class="d-flex align-items-center gap-2">
            <i class="fa-solid fa-envelope fs-5"></i>
            <span class="fw-semibold">happybookstore@happy.com</span>
         </p>
      </div>
      <form class="flex-grow-1 container" id="form" method="POST" action="{{ route('subscribe') }}">
         @csrf
         <div class="row justify-content-center g-3">
            <div class="col-8">
               <h2>Contact Us Now!</h2>
            </div>
            <div class="col-md-8">
               <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                     name="email" value="{{ old('email') }}">
                  @error('email')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
            </div>
            <div class="col-md-8">
               <div class="d-grid">
                  <button class="btn btn-primary" type="submit" id="submit">Submit</button>
               </div>
            </div>
         </div>
      </form>
   </div>
@endsection
