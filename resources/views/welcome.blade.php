@extends('layouts.landing')
@section('content')

<style>
    body {
        background: conic-gradient(from 0deg, #3DA3C3, #f2f2f2, #434343);
        font-family: 'Quicksand', sans-serif
    }
    </style>

<div class="header_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
            <div class="logo">
                <a href="http://127.0.0.1:8000/"><img src="{{ asset('img/apple-icon.png')}}"></a>
                <h6 class="btn btn-light" style="margin-left: 10px;">Si-Bimkoko</h6>
            </div>
        </div>
        <div class="col-md-9">
          <div class="menu_text">
            <ul>
              <div class="togle_3">
                <div class="menu_main">
                  <div class="padding_left0"><a href="http://127.0.0.1:8000/register">Register</a>
                    <span class="padding_left0"><a href="http://127.0.0.1:8000/logins">Login</a></span>
                  </div>
                </div>
                <div class="shoping_bag"><img src="{{ asset('landing/img/search-icon.png')}}"></div>
              </div>
              <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="">Home</a>
                  <a href="">Services</a>
                  <a href="">About</a>
                  <a href="">Choose</a>
                  <a href="">Team</a>
                  <a href="">Contact Us</a>
                </div>
              </div>
              <span class="navbar-toggler-icon"></span>
              <span onclick="openNav()"><img src="{{ asset('landing/img/toggle-icon.png')}}" class="toggle_menu"></span>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <h1 class="banner_taital">Selamat Datang Di</h1>
            <h1 class="banner_taital_1">Si-Bimkoko</h1>
            <p class="banner_text">Solusi Bimbingan Konseling & Konsultasi Online</p>
            <p class="banner_text">See Our Website Demonstration</p>
            <div class="contact_bt"><a href="http://127.0.0.1:8000">Check This<span class="contact_padding"><img
                    src="{{ asset('landing/img/contact-icon.png')}}"></span></a></div>
          </div>
          <div class="col-sm-2 d-flex justify-content-center">
            <div class="play_icon">
              <a href="#"><img src="{{ asset('landing/img/play-icon.png')}}"></a>
            </div>
          </div>
            <div class="col-md-5">
                <div class="image-container text-right" style="margin-right: 10px; width: 120%; height: auto">
                  <img src="{{ asset('img/LOGO_SI-BIMKOKO.png')}}">
                </div>
              </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->
  </div>
  <!-- header section end -->
  <!-- services section start -->
  <div class="services_section layout_padding">
    <div class="container">
      <h1 class="services_taital"><span>Our</span><img src="{{ asset('landing/img/icon-1.png')}}"><span
          style="color: #1f1f1f">Services</span></h1>
      <p style="color:#1f1f1f" class="services_text">Fitur yang mendukung aktivitas <br>Bimbingan Konseling & Konsultasi Online <br>lebih solutif </p>
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Bimbingan Karir</h3>
                    <p class="lorem_text active">Ikuti layanan Bimbingan Karir agar minat & bakat sesuai dengan potensimu</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Konseling Permasalahan</h3>
                    <p class="lorem_text">Ikuti layanan Konseling Permasalahan untuk semua penyelesaian masalahmu</p>
                  </div>
                </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Konsultasi Individu</h3>
                    <p class="lorem_text active">Ikuti layanan Konsultasi Individu ketika kamu kebingungan akan banyak hal </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text">Riwayat Aktivitas</h3>
                    <p class="lorem_text">Ikuti layanan Riwayat Aktivitas untuk melihat rekap aktivitasmu & mengunduhnya </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Bimbingan Karir</h3>
                    <p class="lorem_text active">Ikuti layanan Bimbingan Karir agar minat & bakat sesuai dengan potensimu </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Konseling Permasalahan</h3>
                    <p class="lorem_text">Ikuti layanan Konseling Permasalahan untuk semua penyelesaian masalahmu</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- services section start -->
  <!-- about section start -->
  <div class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-7" style="margin-left: 20%"><img src="{{ asset('img/apple-icon.png')}}" class="image_1" style="width: 150%; height:auto"></div>
        </div>
        <div class="col-md-6">
          <h1 class="services_taital"><span>About </span> <img src="{{ asset('landing/img/icon-1.png')}}"> <span
              style="color: #1f1f1f">Si-Bimkoko</span></h1>
          <p class="ipsum_text">Aplikasi yang menawarkan Solusi Bimbingan Konseling & Konsultasi Online bagi Konselor & Konseli,
            <br> anda juga dapat melihat Riwayat Aktivitas untuk melihat hasil dari aktivitas yang anda lakukan di Aplikasi Si-Bimkoko,
            <br> aplikasi ini didukung oleh "BK SMANSKA"
          </p>
          <div class="contact_bt_1"><a href="#">READ MORE<span class="contact_padding"><img
                  src="{{ asset('landing/img/contact-icon1.png')}}"></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- about section end -->
  <!-- choose section start -->
  <div class="choose_section layout_padding">
    <div class="container">
      <h1 class="choose_taital"><span>Why </span> <img src="{{ asset('landing/img/icon-1.png')}}"> <span style="color: #1f1f1f">Choose
          Us</span></h1>
      <p class="choose_text">Solusi Pintar Bimbingan Konseling & Konsultasi Online</p>
      <div class="choose_section_2 layout_padding">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">3+</h1>
              <h4 class="client_text">Our Counselor</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">100+</h1>
              <h4 class="client_text">Counselees</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">10+</h1>
              <h4 class="client_text">Supports</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">4+</h1>
              <h4 class="client_text">Features</h4>
            </div>
          </div>
        </div>
        <div class="image_3"><img src="{{ asset('img/LOGO_SI-BIMKOKO.png')}}"></div>
        <div class="get_bt"><a href="#">Get A quote</a></div>
      </div>
    </div>
  </div>
  <!-- choose section end -->
  <!-- team section start -->
  {{-- <div class="team_section layout_padding">
    <div class="container">
      <h1 class="choose_taital"><span>Our </span> <img src="{{ asset('landing/img/icon-1.png')}}"> <span style="color: #1f1f1f">Team</span>
      </h1>
      <p class="choose_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua</p>
      <div class="team_section_2 layout_padding">
        <div class="container">
          <div class="img_main_1">
            <div class="row">
              <div class="col-sm-5">
                <div class="image_4"><img src="{{ asset('landing/img/img-4.png')}}"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="{{ asset('landing/img/fb-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/twitter-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/linkden-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/instagram-icon.png')}}"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-7">
                <h2 class="consectetur_text">Consectetur</h2>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
          </div>
          <div class="img_main">
            <div class="row">
              <div class="col-sm-7">
                <h2 class="consectetur_text_1">magna aliqua</h2>
                <p class="dummy_text_1">It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking at its layout. The point of using Lorem</p>
              </div>
              <div class="col-sm-5">
                <div class="image_4"><img src="{{ asset('landing/img/img-5.png')}}"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="{{ asset('landing/img/fb-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/twitter-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/linkden-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/instagram-icon.png')}}"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="img_main_1">
            <div class="row">
              <div class="col-sm-5">
                <div class="image_4"><img src="{{ asset('landing/img/img-6.png')}}"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="{{ asset('landing/img/fb-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/twitter-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/linkden-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/instagram-icon.png')}}"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-7">
                <h2 class="consectetur_text">Aonsectetur</h2>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
          </div>
          <div class="img_main">
            <div class="row">
              <div class="col-sm-7">
                <h2 class="consectetur_text_1">Nonsectetur</h2>
                <p class="dummy_text_1">It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking at its layout. The point of using Lorem</p>
              </div>
              <div class="col-sm-5">
                <div class="image_4"><img src="{{ asset('landing/img/img-7.png')}}"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="{{ asset('landing/img/fb-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/twitter-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/linkden-icon.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('landing/img/instagram-icon.png')}}"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- team section start -->
  <!-- newsletter section start -->
  <div class="newsletter_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="newsletter_text">JOIN US</h1>
          <p class="tempor_text">Input Your Mail...</p>
        </div>
        <div class="col-md-6">
          <div class="mail_bt_main">
            <input type="text" class="mail_text" placeholder="ENTER YOUR MAIL" name="Enter Tour Mail">
            <div class="subscribe_bt"><a href="#">SUBSCRIBE</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- newsletter section end -->
  <!-- footer section start -->
  <div class="footer_section layout_padding">
    <div class="container">
      <div class="footer_main">
        <div class="footer_left">
          <h1 class="contact_taital"><span>Contact </span> <img src="{{ asset('landing/img/icon-2.png')}}"> <span>Us</span></h1>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="{{ asset('landing/img/map-icon.png')}}"><span
                class="padding_left_15">Locations</span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="{{ asset('landing/img/call-icon.png')}}"><span class="padding_left_15">+62</span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="{{ asset('landing/img/map-icon.png')}}"><span
                class="padding_left_15">Sibimkoko@gmail.com</span></a></div>
        </div>
      </div>
      <div class="contact_section">
        <div class="row">
          <div class="col-md-6">
            <div class="mail_section">
              <input type="" class="email_text" placeholder="Name" name="Name">
              <input type="" class="email_text" placeholder="Email" name="Email">
              <input type="" class="email_text" placeholder="Phone Number" name="Phone Number">
              <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
              <div class="send_bt"><a href="#">send</a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map_main">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                  width="600" height="280" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
              </div>
            </div>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="{{ asset('landing/img/fb-icon1.png')}}"></a></li>
                <li><a href="#"><img src="{{ asset('landing/img/twitter-icon1.png')}}"></a></li>
                <li><a href="#"><img src="{{ asset('landing/img/linkden-icon1.png')}}"></a></li>
                <li><a href="#"><img src="{{ asset('landing/img/instagram-icon1.png')}}"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection



