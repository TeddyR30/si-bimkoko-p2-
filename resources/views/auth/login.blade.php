@extends('layouts.app', ['title' => 'Login - Si-Bimkoko'])

@push('css')
<link href="{{ asset('login/css/nucleo-icons.css')}}" rel="stylesheet" />
<link id="pagestyle" href="{{ asset('login/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
<link href="{{ asset('login/css/nucleo-svg.css')}}" rel="stylesheet" />
@endpush

@section('content')

  <div class="">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="http://127.0.0.1:8000/">
              HALAMAN LOGIN SI-BIMKOKO
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
                  <a class="nav-link me-2" href="/profiles">
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
    <div class="page-header align-items-start min-vh-100 " style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80'); height: 100%; background-size: cover; background-position: center; min-height: 100%;">
        {{-- <div class="page-header align-items-start min-vh-100 " style="background: radial-gradient(circle, rgba(250, 250, 250, 1), rgba(204, 223, 245, 1)); height: 100%; background-size: cover; background-position: center; min-height: 100%;"> --}}
        <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="shadow-info border-radius-lg py-3 pe-1" style="background-color: #3DA3C3">
                    <div style="text-align: center">
                        <img src="{{ asset('img/apple-icon.png')}}" alt="Logo apple-icon" width="70px" height="70px" style="">
                      </div>
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Log In</h4>
                  <h5 class="text-white font-weight-bolder text-center mt-2 mb-0">SI-BIMKOKO</h5>
                  {{-- <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-github text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-google text-white text-lg"></i>
                      </a>
                    </div>
                  </div> --}}
                </div>
              </div>
              <div class="card-body">
                <form action="{{ url('logins') }}" method="POST" role="form" class="text-start">
                    @csrf
                  <div class="form-group">
                    <label class="form-label">Email Address</label>
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
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-secondary btn-sm w-100 my-4 mb-2" style="background-color: #3DA3C3; text-color: #FFFFFF" href="'/profile">Log In</button>

                  </div>
                  <a href="/forgot-password">Lupa Password ?</a>
                  <p class="mt-4 text-sm text-center">
                    Belum memiliki Akun?
                    <a href="/register" class="text-gradient font-weight-bold" style="background-color: #3DA3C3">Register</a>
                  </p>
                </form>
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
    </div>
  </main>
{{-- <div class="card">
    <div class="card-body">
        <form role="form" class="text-start">
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control">
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control">
          </div>
          <div class="form-check form-switch d-flex align-items-center mb-3">
            <input class="form-check-input" type="checkbox" id="rememberMe" checked>
            <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
          </div>
          <div class="text-center">
            <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
          </div>
          <p class="mt-4 text-sm text-center">
            Don't have an account?
            <a href="../pages/sign-up.html" class="text-primary text-gradient font-weight-bold">Sign up</a>
          </p>
        </form>
      </div>
</div> --}}
@push('js')
<script src="{{asset ('login/js/core/popper.min.js')}}"></script>
  <script src="{{asset ('login/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset ('login/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset ('login/js/plugins/smooth-scrollbar.min.js')}}"></script>
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
  <script src="{{asset ('login/js/material-dashboard.min.js?v=3.1.0"></script>
@endpush
@endsection

