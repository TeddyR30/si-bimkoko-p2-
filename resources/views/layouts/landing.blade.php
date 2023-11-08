<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('landing/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('landing/img/favicon.png')}}">
  <title>
    SI-BIMKOKO
  </title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/bootstrap.min.css')}}">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/style.css')}}">
  <!-- Responsive-->
  <link rel="stylesheet" href="{{ asset('landing/css/responsive.css')}}">
  <!-- fevicon -->
  <link rel="icon" href="{{ asset('landing/images/fevicon.png')}}" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="{{ asset('landing/css/jquery.mCustomScrollbar.min.css')}}">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
</head>

<body>
    @yield('content')

<footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            Powered <i class="fa fa-heart"></i> By
            <a href="https://www.instagram.com/bk_smanska/" class="font-weight-bold" target="_blank">BK SMANSKA</a>
            SMAN 1 SUKAGUMIWANG.
          </div>
        </div>
        {{-- <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
            </li>
          </ul>
        </div> --}}
      </div>
    </div>
</footer>

  <!-- Javascript files-->
  <script src="{{ asset('landing/js/jquery.min.js')}}"></script>
  <script src="{{ asset('landing/js/popper.min.js')}}"></script>
  <script src="{{ asset('landing/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('landing/js/jquery-3.0.0.min.js')}}"></script>
  <script src="{{ asset('landing/js/plugin.js')}}"></script>
  <!-- sidebar -->
  <script src="{{ asset('landing/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script src="{{ asset('landing/js/custom.js')}}"></script>
  <!-- javascript -->
  <script src="{{ asset('landing/js/owl.carousel.js')}}"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });

      $(".zoom").hover(function () {

        $(this).addClass('transition');
      }, function () {

        $(this).removeClass('transition');
      });
    });
  </script>
  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }
    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>
