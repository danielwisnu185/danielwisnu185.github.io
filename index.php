<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Daily Journal</title>
    <link rel="icon" href="img/logo.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <style>
    body {
        transition: background-color 1s;
    }
    .dark-mode {
        background-color: black;
        color: white;
    }
</style>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">My Daily Journal</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutme">About Me</a>
            </li><li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
      
            <button id="dark">Dark</button>
            <button id="light">Light</button>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->
    <!-- hero begin -->
    <section id="hero" class="text-center p-5 text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="img/banner.jpg" class="img-fluid" width="300" />
          <div>
            <h1 class="fw-bold display-4">
              Create Memories, Save Memories, Everyday
            </h1>
            <h4 class="lead display-6">
              Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali
            </h4>
            </h6>
            <h6>
              <p id="demo"></p>
            </h6>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      $no = 1;
      while($row = $hasil->fetch_assoc()){
        ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 ">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/gal1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/gal2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/gal4.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/gal5.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- gallery end -->
    <!-- schedule begin -->
    <section id="schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SENIN</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Etika Profesi<br />16.20-18.00 | H.4.4
                </li>
                <li class="list-group-item">
                  Sistem Operasi<br />18.30-21.00 | H.4.8
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SELASA</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Pendidikan Kewarganegaraan<br />12.30-13.10 | Kulino
                </li>
                <li class="list-group-item">
                  Probabilitas dan Statistik<br />15.30-18.00 | H.4.9
                </li>
                <li class="list-group-item">
                  Kecerdasan Buatan<br />18.30-21.00 | H.4.11
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">RABU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Manajemen Proyek Teknologi Informasi<br />15.30-18.00 | H.4.6
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">KAMIS</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Bahasa Indonesia<br />12.30-14.10 | Kulino
                </li>
                <li class="list-group-item">
                  Pendidikan Agama Islam<br />16.20-18.00 | Kulino
                </li>
                <li class="list-group-item">
                  Penambangan Data<br />18.30-21.00 | H.4.9
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">JUMAT</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Pemrograman Web Lanjut<br />10.20-12.00 | D.2.K
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SABTU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">FREE</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- schedule end -->
    <!-- about me begin -->
    <section id="aboutme" class="text-center p-5">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-center">
          <div class="p-3">
            <img
              src="img/daniel.jpg"
              class="rounded-circle border shadow"
              width="300"
            />
          </div>
          <div class="p-md-5 text-sm-start">
            <h3 class="lead">A11.2020.12424</h3>
            <h1 class="fw-bold">Daniel wisnu susalit</h1>
            Program Studi Teknik Informatika<br />
            <a
              href="https://dinus.ac.id/"
              class="fw-bold text-dark text-decoration-none"
              >Universitas Dian Nuswantoro</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- about me end -->
    <!-- footer begin -->
    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/udinusofficial"
          ><i class="bi bi-instagram h2 p-2 text-dark"></i
        ></a>
        <a href="https://twitter.com/udinusofficial"
          ><i class="bi bi-twitter h2 p-2 text-dark"></i
        ></a>
        <a href="https://wa.me/+62812685577"
          ><i class="bi bi-whatsapp h2 p-2 text-dark"></i
        ></a>
      </div>
      <div>Daniel Wisnu &copy; 2023</div>
    </footer>
    <!-- footer end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      window.setTimeout("waktu()",1000);

      function showDateTime() {
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    
    day = (day < 10) ? "0" + day : day;
    month = (month < 10) ? "0" + month : month;
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var dateTime = day + "/" + month + "/" + year + " " + h + ":" + m + ":" + s;
    document.getElementById("demo").innerText = dateTime;
    document.getElementById("demo").textContent = dateTime;
    
    setTimeout(showDateTime, 1000);
}

showDateTime();
        document.getElementById('dark').addEventListener('click', function() {
            document.body.classList.add('dark-mode');
        });

        document.getElementById('light').addEventListener('click', function() {
            document.body.classList.remove('dark-mode');
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </body>
</html>
