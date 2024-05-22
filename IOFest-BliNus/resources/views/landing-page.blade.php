<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BliNus</title>
  <!--ponts-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <!--feather-->
  <script src="https://unpkg.com/feather-icons"></script>
  <!--styles-->
  <link rel="stylesheet" href="{{ asset('landing-page/landing-page.css') }}" />
  


</head>

<body>
  <!--nav start-->
  <nav class="navbar">
    <img src="{{ asset('landing-page/logo.png') }}" width="75px" height="75px" />
    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </div>
    <div class="navbar-extra">
      <!--buat href login-->
      <a href="#" id="icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="24" height="24">
          <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
          <path d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z" fill="blue" />
        </svg>
      </a>
      <a href="{{ route('login') }}" id="Login"><i data-feather="log-in"></i></a>
      <a href="#" id="Baju-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!--nav end-->

  <!-- HEro section start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>Mari Dukung <span>Produk Lokal</span></h1>
      <p>
        <b>Kami Bangga Menyajikan Keunikan dan Kualitas Produk Lokal di
          BliNus: Membangun Komunitas, Meningkatkan Kesejahteraan Bersama.</b>
      </p>
      <a href="{{ route('register') }}" class="cta">Beli sekarang</a>
    </main>
  </section>
  <!-- HEro section end -->

  <!-- about section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> kami</h2>

    <div class="row">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="{{ asset('landing-page/abt.jpg') }}" class="pictureSlider" />
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <img src="{{ asset('landing-page/landingpage2.jpg') }}" class="pictureSlider" />
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <img src="{{ asset('landing-page/landingpage3.jpg') }}" class="pictureSlider" />
          <div class="text">Caption Three</div>
        </div>

        <div class="mySlides fade">
          <img src="{{ asset('landing-page/landingpage4.jpg') }}" class="pictureSlider" />
          <div class="text">Caption four</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
      </div>
      <br />

      <div class="content">
        <h3>Kenapa Memilih web Kami</h3>
        <p>
          Pilih Blinus sebagai destinasi e-commerce untuk produk lokal karena
          kami berkomitmen mendukung pengusaha lokal dengan menyediakan produk
          berkualitas terbaik yang telah melalui proses seleksi ketat,
          menawarkan beragam pilihan produk dari pakaian hingga makanan,
          memberikan pengalaman berbelanja online yang mudah dan nyaman,
          menyediakan dukungan pelanggan yang ramah, serta memperkuat
          komunitas pengusaha lokal melalui komunitas solid yang kami bangun.
        </p>
        <p></p>
      </div>
    </div>
  </section>
  <!-- about section end -->
  <!--kenapa kami start-->
  <section id="mengapakami" class="kenapa">
    <h2>keunggulan <span>Kami</span></h2>
    <div class="services section" id="services">
      <div class="container">
        <div class="row">
          <div class="glue">
            <div class="service-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="64px" height="175px">
                  <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg>
              </div>
              <div class="main-content">
                <h4>Dari sisi pelaku usaha</h4>
                <ol>
                  <li>
                    memperluas jangkauan <br />
                    pasar
                  </li>
                  <li>Lebih mudah dalam memasarkan produknya</li>
                  <li>Peningkatan penjualan</li>
                </ol>
              </div>
            </div>

            <div class="service-item">
              <div class="icon">
                <svg style="margin-left: 5px" width="64" height="175px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7H162.5c0 0 0 0 .1 0H168 280h5.5c0 0 0 0 .1 0H417.3c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2H224 204.3c-12.4 0-20.1 13.6-13.7 24.2z" fill="blue" />
                </svg>
              </div>
              <div class="main-content">
                <h4>Sisi user</h4>
                <ol>
                  <li>Beragam Pilihan</li>
                  <li>Kemudahan Akses</li>
                  <li>transaksi Praktis</li>
                </ol>
              </div>
            </div>
            <div class="service-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="64px" height="175px">
                  <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                </svg>
              </div>
              <div class="main-content">
                <h4>Komunitas Lokal</h4>
                <ol>
                  <li>Pemberdayaan Ekonomi</li>
                  <li>Meningkatkan Kesadaran</li>
                  <li>Kolaborasi Komunitas</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--kenapa kami end -->

  <!-- Contact section start -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> kami</h2>
    <p>
      Email: info@blinus.com <br />Telepon: +6281234567890 <br />Alamat: Jl.
      Harmoni No. 10, Jakarta Barat, Indonesia
    </p>

    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9939139702906!2d106.73598687482838!3d-6.131518893855299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1dede9175fb1%3A0x1beb6a05cd89d12a!2sSekolah%20Cinta%20Kasih%20Tzu%20Chi!5e0!3m2!1sid!2sid!4v1715324271254!5m2!1sid!2sid" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      <form action="">
        <p>
          Beritahukan kami Saran dan Kritik untuk pengembangan web lebih
          lanjut!, Saran kalian akan sangat membantu kami.Terimakasih"
        </p>
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama" />
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="email" placeholder="email" />
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="no hp" />
        </div>
        <div class="input-group1">
          <i data-feather="inbox"></i>
          <input type="text" placeholder="saran atau kritik" />
        </div>
        <button type="submit" class="btn">
          Kirim Pesan <i data-feather="send"></i>
        </button>
      </form>
    </div>
  </section>
  <!-- Contact section end -->
  <!--footer start-->
  <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#contact">Kontak</a>
    </div>
    <hr />
    <div class="credit">
      <p>Created by <a href="">CiCinDes</a>. | &copy; 2024.</p>
    </div>
  </footer>
  <!--footer end-->
  <!-- feather section-->
  <script>
    feather.replace();
  </script>

  <!-- jawascript -->
  <script src="{{ asset('landing-page/landing-page.js') }}"></script>
</body>

</html>