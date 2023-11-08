@extends('layouts.app', ['title' => 'Register - Si-Bimkoko'])

@push('css')
<link href="{{ asset('login/css/nucleo-icons.css')}}" rel="stylesheet" />
<link id="pagestyle" href="{{ asset('login/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
<link href="{{ asset('login/css/nucleo-svg.css')}}" rel="stylesheet" />
@endpush

@section('content')

<div class="bg-gray 200">
    {{-- <div class="card border-0 shadow rounded; container position-absolute z-index-sticky top-0"> --}}
        <div class="card-body">
{{-- <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{asset('login/img/illustrations/illustration-signup.jpg')}}'); background-size: cover;"> --}}
    <div class="container position-sticky z-index-sticky top-0">
      <div class="row">
        <div class="col-12">
            {{-- <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container my-auto"> --}}
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid ps-2 pe-0">
                  <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="http://127.0.0.1:8000/">
                    HALAMAN REGISTER SI-BIMKOKO
                  </a>
                  <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2">
                      <span class="navbar-toggler-bar bar1"></span>
                      <span class="navbar-toggler-bar bar2"></span>
                      <span class="navbar-toggler-bar bar3"></span>
                    </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav mx-auto">
                      <li class="nav-item">
                        <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="http://127.0.0.1:8000/">
                          <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                          Dashboard
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link me-2" href="/profile">
                          <i class="fa fa-user opacity-6 text-dark me-1"></i>
                          Profile
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link me-2" href="/register">
                          <i class="fa fa-user-circle opacity-6 text-dark me-1"></i>
                          Register
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link me-2" href="/logins">
                          <i class="fa fa-key opacity-6 text-dark me-1"></i>
                          Log In
                        </a>
                      </li>
                    </ul>
                    <ul class="navbar-nav d-lg-flex d-none">
                      <li class="nav-item d-flex align-items-center">
                        <a class="btn btn-secondary btn-sm mb-0 me-2" target="_blank" href="http://127.0.0.1:8000/" style="background-color: #3DA3C3; text-color: #FFFFFF">SI-BIMKOKO</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <!-- End Navbar -->
        </div>
      </div>
    </div>
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
      <section>
        <div class="page-header min-vh-100">
          <div class="container my-auto">
            <div class="row">
              <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                <img class="justify-content-center" style="border-radius: 10px; margin 0 auto" src="{{('img/LOGO_SI-BIMKOKO.png')}}">
              </div>
              </div>
              <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                <div class="card card-plain">
                  <div class="card-header">
                    <div class="shadow-info py-2 pe-1" style="background-color: #3DA3C3; border-radius: 10px">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register</h4>
                        <h5 class="text-white font-weight-bolder text-center mt-2 mb-0">SI-BIMKOKO</h5>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                      <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Lengkap">
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Alamat Email">
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password">
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                      </div>
                        <div class="form-group">
                            <label class="font-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Masukkan Konfirmasi Password">
                      </div>
                      <div class="form-check form-check-info text-start ps-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                          I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                        </label>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-secondary btn-sm mb-0 me-2 mt-4 w-100" style="background-color: #3DA3C3; text-color: #FFFFFF">Register</button>
                    </div>

                    </form>
                  </div>
                  <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-2 text-sm mx-auto">
                      Sudah Memiliki Akun?
                      <a href="/logins" class="text-gradient font-weight-bold" style="background-color: #3DA3C3">Log In</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
              <div class="row align-items-center justify-content-lg-between">
                <div class="col-12 col-md-6 my-auto">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                          document.write(new Date().getFullYear())
                        </script>,
                        Powered <i class="fa fa-heart"></i> By
                        <a href="https://www.instagram.com/bk_smanska/" class="font-weight-bold" target="_blank">BK SMANSKA</a>
                        SMAN 1 SUKAGUMIWANG.
                      </div>
                </div>
          </footer>
      </section>
    </main>

@endsection
@push('js')
<script src="{{asset('login/js/core/popper.min.js')}}"></script>
<script src="{{asset('login/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('login/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('login/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('login/js/material-dashboard.min.js?v=3.1.0"></script>
@endpush
