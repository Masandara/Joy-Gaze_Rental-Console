<<?php
  include "konek.php";
  //untuk menangkap variabel nama kategori yang dikirim oleh form tambah
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    $nama_pelanggan = $_POST['nama_pelanggan'];
    $ulasan = $_POST['ulasan'];
    $querySimpan = mysqli_query($conn, "INSERT INTO ulasan(nama_pelanggan,ulasan) VALUES('$nama_pelanggan','$ulasan')");
  }
  ?> <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="author" content="templatemo" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />

    <title>Joy Gaze</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
    <style>
      .main-button button {
        font-size: 14px;
        color: #fff;
        background-color: #7453fc;
        border: 1px solid #7453fc;
        padding: 12px 30px;
        display: inline-block;
        border-radius: 25px;
        font-weight: 500;
        text-transform: capitalize;
        letter-spacing: 0.5px;
        transition: all .3s;
        position: relative;
        overflow: hidden;
      }

      .main-button button:after {
        width: 78%;
        height: 2px;
        background-color: #ffff;
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
      }

      .main-button button:hover {
        background-color: #fff;
        color: #7453fc;
        border: 1px solid #fff;
      }
    </style>

  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">
                <img src="assets/images/logo1.png" alt="" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="index.html">Beranda</a></li>
                <li><a href="details.php">Detail</a></li>
                <li><a href="author.php" class="active">Ulasan</a></li>
                <li><a href="create.html">Pesan Sekarang!</a></li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="author-page">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h2><em>Ulasan</em> Pelanggan</h2>
            </div>
          </div>

          <div class="col-lg-12">
            <?php
            include_once("konek.php"); // Memasukkan file konek.php
            ?>

            <form id="contact" method="post">
              <div class="col-lg-4">
                <fieldset>
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama_pelanggan" id="nama" autocomplete="on" required />
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <label for="ulasan">Ulasan</label>
                  <input type="text" name="ulasan" id="ulasan" autocomplete="on" required />
                </fieldset>
              </div>
              <div class="buttons">
                <div class="main-button">
                  <button href="#" class="main-button" name="submit">Kirim</button>
                </div>
              </div>
            </form>
            <!-- Tempat untuk menampilkan ulasan pelanggan -->
            <div class="section-subheading">
              <div class="line-dec"></div>
              <h2><span>Ulasan</span> Pelanggan</h2>
            </div>
            <div id="reviews-container" class="col-lg-12">
              <div style="overflow-x:auto;">
                <table class="table table-responsive table-striped table-dark table-hover" border="1">
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Ulasan</th>
                    <th>Waktu</th>
                  </tr>
                  <?php
                  // Menampilkan ulasan dari database
                  $sql = "SELECT * FROM ulasan ORDER BY waktu ASC";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["id_ulasan"] . "</td><td>" . $row["nama_pelanggan"] . "</td><td>" . $row["ulasan"] . "</td><td>" . $row["waktu"] . "</td>";
                    }
                  } else {
                    echo "<tr><td colspan='4'><center>Belum ada ulasan.</center></td></tr>";
                  }
                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>



    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>
              Copyright © 2023 <a href="#">Joy Gaze</a> Penyewaan konsol
              terbaik. &nbsp;&nbsp; Designed by
              <a title="HTML CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/author.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>

  </html>