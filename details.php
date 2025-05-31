<?php
function getStock($consoleName) {
   // Database connection details
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "sewa";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   // Get stock from the 'consoles' table
   $sql = "SELECT stock FROM consoles WHERE name = '$consoleName'";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["stock"];
   } else {
      return "Not Available";
   }

   // Close the database connection
   $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="templatemo" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <title>Joy Gaze</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
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
                <li><a href="details.php" class="active">Detail</a></li>
                <li><a href="author.php">Ulasan</a></li>
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

    <div class="item-details-page">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h2><em>Detail</em> Produk</h2>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="left-image">
              <img
                src="assets/images/ps3.png"
                alt=""
                style="border-radius: 20px"
              />
            </div>
          </div>
          <div class="col-lg-5 align-self-center">
            <h4 style="color: #8555f5">PS 3</h4>
            <p id="stok-info">Stok Tersedia: <?php echo getStock("PS 3"); ?></p>
            <div class="row">
              <div class="col-3">
                <span class="bid">
                  Durasi<br /><em class="mb-0">1 hari</em><br />
                  <em class="mb-0">2 hari</em><br />
                  <em class="mb-0">3 hari</em><br />
                </span>
              </div>
              <div class="col-4">
                <span class="owner">
                  Harga Sewa<br /><em class="mb-0">Rp50.000,00</em><br />
                  <em class="mb-0">Rp100.000,00</em><br />
                  <em class="mb-0">Rp150.000,00</em><br />
                </span>
              </div>
              <p>Denda Rp15.000,00/jam</p>
            </div>
            <a href="create.html"
              ><button type="submit" class="main-button">
                Pesan Sekarang!
              </button></a
            >
          </div>

          <div class="mb-5"></div>
          <div class="col-lg-7">
            <div class="left-image">
              <img
                src="assets/images/ps4.png"
                alt=""
                style="border-radius: 20px"
              />
            </div>
          </div>
          <div class="col-lg-5 align-self-center">
            <h4 style="color: #8555f5">PS 4</h4>
            <p id="stok-info">Stok Tersedia: <?php echo getStock("PS 4"); ?></p>
            <div class="row">
              <div class="col-3">
                <span class="bid">
                  Durasi<br /><em class="mb-0">1 hari</em><br />
                  <em class="mb-0">2 hari</em><br />
                  <em class="mb-0">3 hari</em><br />
                </span>
              </div>
              <div class="col-4">
                <span class="owner">
                  Harga Sewa<br /><em class="mb-0">Rp60.000,00</em><br />
                  <em class="mb-0">Rp120.000,00</em><br />
                  <em class="mb-0">Rp180.000,00</em><br />
                </span>
              </div>
              <p>Denda Rp15.000,00/jam</p>
            </div>
            <a href="create.html"
              ><button type="submit" class="main-button">
                Pesan Sekarang!
              </button></a
            >
          </div>

          <div class="mb-5"></div>

          <div class="col-lg-7">
            <div class="left-image">
              <img
                src="assets/images/ps5.png"
                alt=""
                style="border-radius: 20px"
              />
            </div>
          </div>
          <div class="col-lg-5 align-self-center">
            <h4 style="color: #8555f5">PS 5</h4>
            <p id="stok-info">Stok Tersedia: <?php echo getStock("PS 5"); ?></p>
            <div class="row">
              <div class="col-3">
                <span class="bid">
                  Durasi<br /><em class="mb-0">1 hari</em><br />
                  <em class="mb-0">2 hari</em><br />
                  <em class="mb-0">3 hari</em><br />
                </span>
              </div>
              <div class="col-4">
                <span class="owner">
                  Harga Sewa<br /><em class="mb-0">Rp70.000,00</em><br />
                  <em class="mb-0">Rp140.000,00</em><br />
                  <em class="mb-0">Rp210.000,00</em><br />
                </span>
              </div>
              <p>Denda Rp15.000,00/jam</p>
            </div>
            <a href="create.html"
              ><button type="submit" class="main-button">
                Pesan Sekarang!
              </button></a
            >
          </div>

          <div class="mb-5"></div>

          <div class="col-lg-7">
            <div class="left-image">
              <img
                src="assets/images/xbox.png"
                alt=""
                style="border-radius: 20px"
              />
            </div>
          </div>
          <div class="col-lg-5 align-self-center">
            <h4 style="color: #8555f5">XBOX</h4>
            <p id="stok-info">Stok Tersedia: <?php echo getStock("XBOX"); ?></p>
            <div class="row">
              <div class="col-3">
                <span class="bid">
                  Durasi<br /><em class="mb-0">1 hari</em><br />
                  <em class="mb-0">2 hari</em><br />
                  <em class="mb-0">3 hari</em><br />
                </span>
              </div>
              <div class="col-4">
                <span class="owner">
                  Harga Sewa<br /><em class="mb-0">Rp90.000,00</em><br />
                  <em class="mb-0">Rp180.000,00</em><br />
                  <em class="mb-0">Rp270.000,00</em><br />
                </span>
              </div>
              <p>Denda Rp15.000,00/jam</p>
            </div>
            <a href="create.html"
              ><button type="submit" class="main-button">
                Pesan Sekarang!
              </button></a
            >
          </div>
        </div>
      </div>
    </div>
    <div id="create">
  <div class="create-nft">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Alamat dan kontak kami</h2>
          </div>
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
          <div class="item first-item">
            <!-- <div class="icon">
              <img src="assets/images/s1.png" alt="">
            </div> -->
            <h4>Alamat kami</h4>
            <p>Untuk keperluan pembayaran dan pengambilan konsol, silahkan datang ke alamat kami <a href = "https://maps.app.goo.gl/AHttWzfUzvvS9ccw8">DISINI</a></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <!-- <div class="icon">
              <img src="assets/images/s2.png" alt="">
            </div> -->
            <h4>Kontak kami</h4>
            <p>Jika membutuhkan informasi lebih lanjut dan ada pertanyaan lain terkait jasa penyewaan ps kami, bisa langsung hubungi <a href = "https://api.whatsapp.com/send/?phone=085156875818&text&type=phone_number&app_absent=0">WA ADMIN</a></p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
    

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
