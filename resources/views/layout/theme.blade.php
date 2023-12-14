@extends('layout.header')
<body class="bg-blue 100" style="background: radial-gradient(#f2f2f2, #327286, #009BCC00 0%">
    @include('layout.navbar')

    <div class="container-fluid">
        <div class="row">
            <!-- SideBar -->
            <div class="col-md-2">
                @include('layout.sidebar')
            </div>

            {{-- Main Content --}}
    <div class="col-md-10">
        <main>
            <div class="container-fluid">
                @yield('content')
                <div style="text-align: center;">
                  <div class="centered-card" style="background: radial-gradient(circle, rgba(61, 163, 195, 0.5), rgba(47, 136, 255, 0.12), rgba(47, 136, 255, 0.12)); border-radius: 20px; width: 38%; font-family: Poppins; font-size: 60px; margin: 0 auto;">SI-BIMKOKO</div>
                </div>

                <div class="card py-1" style="background: radial-gradient(circle, rgba(61, 163, 195, 0.5), rgba(47, 136, 255, 0.12), rgba(47, 136, 255, 0.12)); width: 98%; border-radius: 20px; margin-top: 20px;">
                  <div style="padding: 10px; color: #434343; font-size: 30px; font-family: Poppins; font-weight: 600; word-wrap: break-word;">Solusi Pintar Bimbingan Konseling dan Konsultasi Online</div>
                  <div style="padding: 10px; color: #434343; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-align: justify; width: 50%;">Si-Bimkoko merupakan platform yang didedikasikan untuk Layanan Bimbingan Konseling dan Konsultasi di Sekolah. Si-Bimkoko menyediakan fitur yang akan menjadi alat bantu Konselor Sekolah/Guru Bimbingan Konseling dan Konsultasi secara online.</div>
                </div>

                <div style="border: 2px solid #F2F2F2; width: 98%; height: 88%; background: rgba(141, 145, 161, 0.21); border-radius: 20px; margin-top: 20px;">
                  <div style="width: 22%; min-width: 200px; color: #3DA3C3; border-radius: 10px; text-align: left; padding: 20px; margin: 10px; display: inline-block; cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1.0)'" class="flex-container" id="penggunaCard">
                    <div style="font-size: 50px; text-align: center; flex-direction: row"><span>100</span><h6 style="text-align: center">Pengguna</h6></div>
                  </div>

                  <div style="width: 22%; min-width: 200px; color: #3DA3C3; border-radius: 10px; text-align: left; padding: 20px; margin: 10px; display: inline-block; cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1.0)'" class="flex-container" id="bimbinganCard">
                    <div style="font-size: 50px; text-align: center; flex-direction: row"><span>50</span><h6 style="text-align: center">Bimbingan</h6></div>
                  </div>

                  <div style="width: 22%; min-width: 200px; color: #3DA3C3; border-radius: 10px; text-align: left; padding: 20px; margin: 10px; display: inline-block; cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1.0)'" class="flex-container" id="konselingCard">
                    <div style="font-size: 50px; text-align: center; flex-direction: row"><span>75</span><h6 style="text-align: center">Konseling</h6></div>
                  </div>

                  <div style="width: 22%; min-width: 200px; color: #3DA3C3; border-radius: 10px; text-align: left; padding: 20px; margin: 10px; display: inline-block; cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1.0)'" class="flex-container" id="konsultasiCard">
                    <div style="font-size: 50px; text-align: center; flex-direction: row"><span>120</span><h6 style="text-align: center">Konsultasi</h6></div>
                  </div>
                </div>

                <h6 class="py-2" style="color: #434343; font-size: 30px; font-family: Poppins; font-weight: 600; text-align: center">Fitur Kami : </h6>
          <div>
            <!-- Kartu Fitur Utama 1 -->
            <div style="width: 31%; min-width: 200px; background: rgba(141, 145, 161, 0.21); color: #3DA3C3; border-radius: 10px; text-align: center; padding: 20px; margin: 10px; display: inline-block; cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1.0)'" onclick="showMessage('Bimbingan : Bimbingan Karir & Lainnya')">
                <h4>Bimbingan</h4>
                <p>Bimbingan Karir & Lainnya</p>
            </div>

            <!-- Kartu Fitur Utama 2 -->
            <div style="width: 31%; min-width: 200px; background: rgba(141, 145, 161, 0.21); color: #3DA3C3; border-radius: 10px; text-align: center; padding: 20px; margin: 10px; display: inline-block; cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1.0)'" onclick="showMessage('Konseling : Konseling Permasalahan & Lainnya')">
                <h4>Konseling</h4>
                <p>Konseling Permasalahan & Lainnya</p>
            </div>

            <!-- Kartu Fitur Utama 3 -->
            <div style="width: 31%; min-width: 200px; background: rgba(141, 145, 161, 0.21); color: #3DA3C3; border-radius: 10px; text-align: center; padding: 20px; margin: 10px; display: inline-block; cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1.0)'" onclick="showMessage('Konsultasi Individu & Lainnya')">
                <h4>Konsultasi</h4>
                <p>Konsultasi Individu & Lainnya</p>
            </div>

            <script>
                // Fungsi untuk menampilkan pesan
                function showMessage(message) {
                    alert(message);
                }
            </script>
          </div>

          <div class="flex-container" style="background: rgba(141, 145, 161, 0.21); border-radius: 20px; width: 98%; margin: 10px">
            <h4 style="text-align: center; margin-top: 10px">Pilihan Konselor</h4>
            <div style="width: 31%; border: 1px solid #ccc; border-radius: 12px; margin: 10px; padding: 10px; display: inline-block; text-align: center;">
                <div style="border-radius: 50%; width: 150px; height: 150px; overflow: hidden; margin: 0 auto;">
                  <img src="https://example.com/profile1.jpg" alt="Profile 1" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="margin-top: 10px;">
                  <h2>Konselor 1</h2>
                  <p>Deskripsi Konselor 1 disini.</p>
                </div>
              </div>

              <div style="width: 31%; border: 1px solid #ccc; border-radius: 12px; margin: 10px; padding: 10px; display: inline-block; text-align: center;">
                <div style="border-radius: 50%; width: 150px; height: 150px; overflow: hidden; margin: 0 auto;">
                  <img src="https://example.com/profile2.jpg" alt="Profile 2" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="margin-top: 10px;">
                  <h2>Konselor 2</h2>
                  <p>Deskripsi Konselor 2 disini.</p>
                </div>
              </div>

              <div style="width: 31%; border: 1px solid #ccc; border-radius: 12px; margin: 10px; padding: 10px; display: inline-block; text-align: center;">
                <div style="border-radius: 50%; width: 150px; height: 150px; overflow: hidden; margin: 0 auto;">
                  <img src="https://example.com/profile3.jpg" alt="Profile 3" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="margin-top: 10px;">
                  <h2>Konselor 3</h2>
                  <p>Deskripsi Konselor 3 disini.</p>
                </div>
            </div>
            <div>
                <a href="/profiles" class="btn" style="background-color:#3DA3C3; color: #f2f2f2; float: right; margin-top: 10px">Profile Konselor Lainnya -----></a>
            </div>
            <div style="width: 100fr; height: 100%; border: 1px #3DA3C3 solid"></div>
        </div>

        <div class="row align-item-center justify-content">
                <div>
                    <h4 style="text-align: center; margin-top: 10px">Jadwal Tersedia</h4>
                </div>
                <div style="width: 18%; border-radius: 10px; margin: 10px; padding: 10px; display: inline-block; text-align: center; background-color: rgba(141, 145, 161, 0.21)">
                    <div style="background: rgba(21, 105, 132, 0.4); color: #f2f2f2; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 5px;">
                      Senin
                    </div>
                    <div style="font-size: 24px; font-weight: bold;">24</div>
                    <div style="font-size: 18px; margin-top: 5px;">Oktober 2023</div>
                    <div style="margin-top: 10px;">0% Booked</div>
                  </div>

                  <div style="width: 18%; border-radius: 10px; margin: 10px; padding: 10px; display: inline-block; text-align: center; background-color: rgba(141, 145, 161, 0.21)">
                    <div style="background: rgba(21, 105, 132, 0.4); color: #f2f2f2; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 5px;">
                      Selasa
                    </div>
                    <div style="font-size: 24px; font-weight: bold;">25</div>
                    <div style="font-size: 18px; margin-top: 5px;">Oktober 2023</div>
                    <div style="margin-top: 10px;">0% Booked</div>
                  </div>

                  <div style="width: 18%; border-radius: 10px; margin: 10px; padding: 10px; display: inline-block; text-align: center; background-color: rgba(141, 145, 161, 0.21)">
                    <div style="background: rgba(21, 105, 132, 0.4); color: #f2f2f2; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 5px;">
                      Rabu
                    </div>
                    <div style="font-size: 24px; font-weight: bold;">26</div>
                    <div style="font-size: 18px; margin-top: 5px;">Oktober 2023</div>
                    <div style="margin-top: 10px;">0% Booked</div>
                  </div>

                  <div style="width: 18%; border-radius: 10px; margin: 10px; padding: 10px; display: inline-block; text-align: center; background-color: rgba(141, 145, 161, 0.21)">
                    <div style="background: rgba(21, 105, 132, 0.4); color: #f2f2f2; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 5px;">
                      Kamis
                    </div>
                    <div style="font-size: 24px; font-weight: bold;">27</div>
                    <div style="font-size: 18px; margin-top: 5px;">Oktober 2023</div>
                    <div style="margin-top: 10px;">0% Booked</div>
                  </div>

                  <div style="width: 18%; border-radius: 10px; margin: 10px; padding: 10px; display: inline-block; text-align: center; background-color: rgba(141, 145, 161, 0.21)">
                    <div style="background: rgba(21, 105, 132, 0.4); color: #f2f2f2; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 5px;">
                      Jumat
                    </div>
                    <div style="font-size: 24px; font-weight: bold;">28</div>
                    <div style="font-size: 18px; margin-top: 5px;">Oktober 2023</div>
                    <div style="margin-top: 10px;">0% Booked</div>
                  </div>
                  <div style="text-align: center">Layanan tersedia setiap hari pukul 09.00-22.00 WIB, kamu bisa menjadwalkan sesi hingga 2 minggu ke depan. Sesuai jadwal yang masih tersedia</div>
        </div>
        <div class="flex-container" style="background: rgba(141, 145, 161, 0.21); border-radius: 20px; width: 98%; margin: 10px; padding: 20px; text-align: center;">
            <h4 style="margin-top: 10px;">Alur Konsultasi</h4>
            <div class="thumbnail-container" style="display: flex; justify-content: space-between; margin-top: 20px;">
                <div class="thumbnail" style="width: 30%; padding: 10px; border: 1px solid rgba(21, 105, 132, 0.4); border-radius: 5px; margin: 10px; text-align: center;">
                    <img src="gambar1.jpg" alt="Thumbnail 1" style="width: 100px; height: 100px; border-radius: 5px;">
                    <div style="font-size: 24px; color: rgba(21, 105, 132, 0.4); font-weight: bold;">1</div>
                    <div style="margin-top: 10px; font-size: 16px;">Pilih Konselor</div>
                </div>
                <div class="thumbnail" style="width: 30%; padding: 10px; border: 1px solid rgba(21, 105, 132, 0.4); border-radius: 5px; margin: 10px; text-align: center;">
                    <img src="gambar2.jpg" alt="Thumbnail 2" style="width: 100px; height: 100px; border-radius: 5px;">
                    <div style="font-size: 24px; color: rgba(21, 105, 132, 0.4); font-weight: bold;">2</div>
                    <div style="margin-top: 10px; font-size: 16px;">Atur Jadwal</div>
                </div>
                <div class="thumbnail" style="width: 30%; padding: 10px; border: 1px solid rgba(21, 105, 132, 0.4); border-radius: 5px; margin: 10px; text-align: center;">
                    <img src="gambar3.jpg" alt="Thumbnail 3" style="width: 100px; height: 100px; border-radius: 5px;">
                    <div style="font-size: 24px; color: rgba(21, 105, 132, 0.4); font-weight: bold;">3</div>
                    <div style="margin-top: 10px; font-size: 16px;">Mulai Konsultasi</div>
                </div>
            </div>
        </div>
        @include('layout.footer')
    </main>
    </div>
</body>
</html>
