<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Divisi IT - Balai Yasa Lahat</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">
    <img src="{{ asset('img/logo.png') }}" alt="Logo KAI">
    </div>
    <nav>
      <ul>
        <li><a href="#hero">Home</a></li>
        <li><a href="#about-us-section">About</a></li>
        <li><a href="#our-team-section">Team</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="{{route('pilihrole')}}" class="btn-primary" style="color: white">Login</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero" id="hero">
    <div class="hero-overlay">
      <h1>WELCOME TO DIVISI IT <br> UPT BALAI YASA LAHAT</h1>
      <p class="tagline">Safety and Sustainable</p><br><br>
      <a href="{{route('pilihrole')}}" class="btn-primary">Login</a>
    </div>
  </section>

  <!-- About Us Section -->
  <section class="about-us-section" id="about-us-section">
    <div class="about-us-container">
        <div class="about-us-content">
        <h4>ABOUT US</h4>
        <h2>IT Support Cepat dan Tepat <br> untuk Mendukung Kinerja Setiap Divisi</h2>
        <p>
            Divisi IT Balai Yasa Lahat merupakan unit yang bertanggung jawab atas pengelolaan dan pengembangan teknologi informasi di lingkungan kerja Balai Yasa Lahat. Kami menyediakan layanan teknis mulai dari perawatan jaringan, pengelolaan sistem, hingga dukungan troubleshooting perangkat untuk mendukung kelancaran operasional perkeretaapian. Komitmen kami adalah memberikan layanan IT yang cepat, akurat, dan terpercaya.
        </p>
        </div>
        <div class="about-us-image">
        <img src="{{ asset('img/cctv.jpg') }}" alt="IT Support Team">
        </div>
    </div>
    <br><br><br>

    <div class="service-cards-container">
        <div class="service-card orange">
        <span class="number">1</span>
        <h3>Maintenance Komputer</h3>
        <p>Perbaikan, upgrade perangkat keras, instalasi software, dan optimasi kinerja komputer di lingkungan kerja.</p>
        </div>
        <div class="service-card dark-blue">
        <span class="number">2</span>
        <h3>Pemasangan & Perawatan Starlink</h3>
        <p>Menyediakan pemasangan serta pemeliharaan koneksi internet berbasis satelit Starlink untuk area kerja yang membutuhkan konektivitas tinggi.</p>
        </div>
        <div class="service-card orange">
        <span class="number">3</span>
        <h3>Perbaikan & Pemasangan CCTV</h3>
        <p>Instalasi dan troubleshooting sistem CCTV untuk mendukung keamanan dan pengawasan area Balai Yasa.</p>
        </div>
        <div class="service-card dark-blue">
        <span class="number">4</span>
        <h3>Maintenance Jaringan Internet</h3>
        <p>Pemeliharaan infrastruktur jaringan LAN/WAN, perbaikan koneksi, serta penataan ulang kabel dan perangkat jaringan.</p>
        </div>
    </div>
    {{-- </section>
    <section> --}}
        <div class="about-us-footer">
        <div class="about-us-footer-overlay">
            <h2>Dari Instalasi hingga Inovasi Setiap Sistem yang Kami Bangun Adalah Langkah Menuju Operasional yang Lebih Unggul</h2>
        </div>
    </div>
    </section>


  <!-- OUR STORY -->
    <section class="our-story-section">
    <div class="our-story-container">
        <div class="our-story-image">
            <div class="gambar-besar">
                 <img src="img/depan balaiyasa.jpg" alt="our team">
            </div>
            <div class="gambar-kecil">
                 <img src="img/depan kereta.jpg" alt="our team 2">
            </div>
        </div>
        <div class="our-story-content">
        <h4>OUR STORY</h4>
        <p>
            Seiring dengan berkembangnya kebutuhan digital di lingkungan perkeretaapian, Divisi IT Balai Yasa Lahat hadir sebagai garda terdepan dalam mendukung transformasi teknologi. Kami memulai perjalanan dari kebutuhan dasar perawatan sistem komputer dan jaringan internal, hingga kini dipercaya menangani berbagai proyek strategis seperti pemasangan Starlink, sistem keamanan CCTV, dan pengembangan sistem internal.
        </p>
        </div>
    </div>
    </section>

      <!-- OUR TEAM Section -->
    <section class="our-team-section" id="our-team-section">
        <div class="our-team-header">
        {{-- <img src="{{ asset('img/Vector.png') }}" alt="Team Icon" class="team-icon">
        <h3 class="subheading">OUR TEAM</h3> --}}
        <h2>Team Divisi IT</h2>
        </div>
        <div class="our-team-container">
        <div class="team-member">
            <img src="{{ asset('img/pak imam.jpg') }}" alt="Imam Anugrah">
            <h4><strong>Imam Anugrah</strong></h4>
            <p>Team Leader Infrastructure Support</p>
        </div>
        <div class="team-member">
            <img src="{{ asset('img/pak fery.jpg') }}" alt="Fery Ardiansah">
            <h4><strong>Fery Ardiansah</strong></h4>
            <p>Asistant Manager Sistem Informasi</p>
        </div>
        <div class="team-member">
            <img src="{{ asset('img/profile.jpeg') }}" alt="Ares Pambudi Arto">
            <h4><strong>Ares Pambudi Arto</strong></h4>
            <p>Team Leader Infrastructure Support</p>
        </div>
        </div>
    </section>

    {{-- contact --}}
    <section class="contact" id="contact" style="background-color: #2c2474; color: #fff; padding: 70px 20px;">
      <div style="display: flex;flex-wrap: wrap;justify-content: center;gap: 20px;">
        <div style="  background-color: #f9ede7;border-radius: 12px;padding: 20px;width: 300px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);text-align: left;color: #000;">
          <i class="fas fa-phone-alt" style="font-size: 28px;color: #2c2474;margin-bottom: 10px;"></i>
          <h3 style="color: #2c2474">Call Center</h3>
          <p style="color: #2c2474">121 (dari telepon seluler)<br>atau (021) 121</p>
        </div>
        <div style="  background-color: #f9ede7;border-radius: 12px;padding: 20px;width: 300px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);text-align: left;color: #000;">
          <i class="fas fa-envelope" style=" font-size: 28px;color: #2c2474;margin-bottom: 10px;"></i>
          <h3 style="color: #2c2474">Send Email</h3>
          <p style="color: #2c2474">Divisi IT : ITbylt@gmail.com<br>Support : informationbylt@gmail.com</p>
        </div>
        <div style="  background-color: #f9ede7;border-radius: 12px;padding: 20px;width: 300px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);text-align: left;color: #000;">
          <i class="fas fa-map-marker-alt" style=" font-size: 28px;color: #2c2474;margin-bottom: 10px;"></i>
          <h3 style="color: #2c2474">Visit a Office</h3>
          <p style="color: #2c2474">Jl. Inspektur Yazid No.1, Lahat, Kabupaten Lahat,<br>Sumatera Selatan 31417, Indonesia</p>
        </div>
      </div>
      <br><br>
      <footer style="text-align: center;color: white;font-size: 13px;padding: 0px;background-color: #2c2474;">
        <p>Copyright © 2025 UPT Balai Yasa Lahat Divisi IT</p>
      </footer>
    </section>

  <script src="script.js"></script>
  <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });
  </script>


    <script src="{{asset('sdadmin2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sdadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('sdadmin2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('sdadmin2/js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>


    @session('success')
        <script>
        Swal.fire({
            title: "Sukses!",
            text: "{{ session('success') }}",
            icon: "success"
        });
        </script>
    @endsession

    @session('error')
        <script>
        Swal.fire({
            title: "Gagal",
            text: "{{ session('error') }}",
            icon: "error"
        });
        </script>
    @endsession

</body>
</html>
