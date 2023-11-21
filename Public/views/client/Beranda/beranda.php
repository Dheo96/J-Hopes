<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/client/Beranda/styleboots.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
   
    <title>Hello, world!</title> 
  </head>
  <body>
    <div class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
          <!-- Logo di sebelah kiri -->
          <a class="navbar-brand" href="#">
            <img src="../../../images/client/Beranda/logo.png" alt="Logo">
          </a>
      
          <!-- Tombol toggler untuk responsif -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <!-- Daftar navigasi -->
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto"> <!-- ms-auto menggeser elemen ke kanan -->
              <li class="nav-item me-3"> <!-- Menambahkan margin ke kanan -->
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item me-3"> <!-- Menambahkan margin ke kanan -->
                <a class="nav-link" href="#">Tentang Kami</a>
              </li>
              <li class="nav-item me-3"> <!-- Menambahkan margin ke kanan -->
                <a class="nav-link" href="caripanti.html">Cari panti</a>
              </li>
              <li class="nav-item me-3"> <!-- Menambahkan margin ke kanan -->
                <a class="nav-link" href="#">Kabar Panti</a>
              </li>
              <li class="nav-item me-3"> <!-- Menambahkan margin ke kanan -->
                <a class="nav-link" href="#">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    <div class="content">
      <div class="text">
        <h2>Hello,
          Welcome para Dermawan</h2>
        <p>Orang-orang dermawan yang sudah siap menyumbang</p>
      </div>
      <div class="gambar_konten1">
        <img src="../../../images/client/Beranda/CONTENT1.png" alt="img">
      </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../../../images/client/Beranda/konten1.jpg" class="d-block">
        </div>
        <div class="carousel-item">
          <img src="../../../images/client/Beranda/1.jpg" class="d-  block w-100">
        </div>
        <div class="carousel-item">
          <img src="../../../images/client/Beranda/1.jpg" class="d-block w-100">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


      <div class="panti_tergabung">
        <h1>Panti Tergabung</h1>
      </div>
      <div class="card-container">
        <div class="card">
            <img src="../../../images/client/Beranda/1.png" class="card-img-top gambar-card" alt="...">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                  <h5 class="card-title fw-bold fs-5">Card title 1</h5>
                  <div class="tanggal">
                      <p class="fs-6">20 November 2023</p>
                  </div>
              </div>
              <div class="d-flex gap-3">
                  <div class="btn btn-sm btn-primary rounded-pill px-4">20 Pengurus</div>
                  <div class="btn btn-sm btn-primary rounded-pill px-4">50 Anak Asuh</div>
              </div>
              <p class="card-text fs-6 mt-3">
                  Jalan Mastrip II No.75, Lingkungan Panji, Tegalgede, Kec. Sumbersari, 
                  Kabupaten Jember, Jawa Timur 68121
              </p>
              <a href="#" class="btn btn-primary">Lihat Detail</a>
            </div>
        </div>
    
       <div class="card">
            <img src="../../../images/client/Beranda/1.png" class="card-img-top gambar-card" alt="...">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                  <h5 class="card-title fw-bold fs-5">Card title 1</h5>
                  <div class="tanggal">
                      <p class="fs-6">20 November 2023</p>
                  </div>
              </div>
              <div class="d-flex gap-3">
                  <div class="btn btn-sm btn-primary rounded-pill px-4">20 Pengurus</div>
                  <div class="btn btn-sm btn-primary rounded-pill px-4">50 Anak Asuh</div>
              </div>
              <p class="card-text fs-6 mt-3">
                  Jalan Mastrip II No.75, Lingkungan Panji, Tegalgede, Kec. Sumbersari, 
                  Kabupaten Jember, Jawa Timur 68121
              </p>
              <a href="#" class="btn btn-primary">Lihat Detail</a>
            </div>
        </div>
    
        <div class="card">
          <img src="../../../images/client/Beranda/1.png" class="card-img-top gambar-card" alt="...">
          <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title fw-bold fs-5">Card title 1</h5>
                <div class="tanggal">
                    <p class="fs-6">20 November 2023</p>
                </div>
            </div>
            <div class="d-flex gap-3">
                <div class="btn btn-sm btn-primary rounded-pill px-4">20 Pengurus</div>
                <div class="btn btn-sm btn-primary rounded-pill px-4">50 Anak Asuh</div>
            </div>
            <p class="card-text fs-6 mt-3">
                Jalan Mastrip II No.75, Lingkungan Panji, Tegalgede, Kec. Sumbersari, 
                Kabupaten Jember, Jawa Timur 68121
            </p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
      </div>
    </div>

    <div class="lihat_semua" style="display: flex; justify-content: center; align-items: center; ">
      <button>Lihat semua</button>
    </div>

    <div class="panti_tergabung"> 
      <h1>Kabar Panti</h1>

      <div class="card-container">
        <div class="card">
          <img src="../../../images/client/Beranda/1.png" class="card-img-top gambar-card" alt="...">
          <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title fw-bold fs-5">Card title 1</h5>
                <div class="tanggal">
                    <p class="fs-6">20 November 2023</p>
                </div>
            </div>
            <p class="card-text fs-6 mt-3" style="text-align: left;">
                Jalan Mastrip II No.75, Lingkungan Panji, Tegalgede, Kec. Sumbersari, 
                Kabupaten Jember, Jawa Timur 68121
            </p>
            <a href="#" class="btn btn-primary" style="float: right;">Lihat Detail</a>
          </div>
      </div>
  
     <div class="card">
          <img src="../../../images/client/Beranda/1.png" class="card-img-top gambar-card" alt="...">
          <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title fw-bold fs-5">Card title 1</h5>
                <div class="tanggal">
                    <p class="fs-6">20 November 2023</p>
                </div>
            </div>
            <p class="card-text fs-6 mt-3" style="text-align: left;">
                Jalan Mastrip II No.75, Lingkungan Panji, Tegalgede, Kec. Sumbersari, 
                Kabupaten Jember, Jawa Timur 68121
            </p>
            <a href="#" class="btn btn-primary" style="float: right;">Lihat Detail </a>
          </div>
      </div>
  
      <div class="card">
        <img src="../../../images/client/Beranda/1.png" class="card-img-top gambar-card" alt="...">
        <div class="card-body">
          <div class="d-flex justify-content-between">
              <h5 class="card-title fw-bold fs-5">Card title 1</h5>
              <div class="tanggal">
                  <p class="fs-6">20 November 2023</p>
              </div>
          </div>
          <p class="card-text fs-6 mt-3" style="text-align: left;">
              Jalan Mastrip II No.75, Lingkungan Panji, Tegalgede, Kec. Sumbersari, 
              Kabupaten Jember, Jawa Timur 68121
          </p>
          <a href="#" class="btn btn-primary" style="float: right;">Lihat Detail</a>
        </div>
    </div>
    </div>

    <div class="lihat_semua">
      <button>Lihat semua</button>
    </div>

    <div class="panti_tergabung">
      <h1>Mengapa harus J-HOPES?</h1> 
      <div class="lingkaran-container">
        <div class="lingkaran">
          <img src="../../../images/client/Beranda/info.png" alt="Gambar 1">
          <p>Menyediakan informasi lengkap </p>
        </div>
        <div class="lingkaran" style="margin-top: 200px; align-content: center;">
          <img src="../../../images/client/Beranda/urgen.png" alt="Gambar 2">
          <p>menghadirkan daftar kebutuhan yang mendesak.</p>
        </div>
        <div class="lingkaran">
          <img src="../../../images/client/Beranda/donation.png" alt="Gambar 3">
          <p>memberikan kemudahan bagi seluruh donatur.</p>
        </div>
      </div>


  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>