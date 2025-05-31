<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="author" content="templatemo">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <title>Joy Gaze</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>
<style>
  .div-container {
    display: block;
    clear: both;
  }

  .col-lg-4,
  .col-lg-8 {
    display: block;
    float: none;
  }

  .input-container {
    position: relative;
  }

  .options {
    list-style: none;
    padding: 0;
    background-color: white;
    border: 1px solid #ccc;
    position: absolute;
    top: 100%;
    left: 0;
    display: none;
    width: 100%;
    z-index: 1;
  }

  .options li {
    cursor: pointer;
    padding: 5px;
  }

  .bid p {
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 150%;
  }

  .bid span {
    display: flex;
    justify-content: space-between;
    margin: 0;
    width: 150px;
    /* Sesuaikan lebar sesuai kebutuhan */
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var inputElement = document.getElementById("description");
    var optionsElement = document.getElementById("options");

    inputElement.addEventListener("click", function() {
      if (optionsElement.style.display === "none") {
        optionsElement.style.display = "block";
      } else {
        optionsElement.style.display = "none";
      }
    });

    optionsElement.addEventListener("click", function(e) {
      if (e.target && e.target.matches("li")) {
        var selectedValue = e.target.getAttribute("data-value");
        inputElement.value = selectedValue;
        optionsElement.style.display = "none";
      }
    });
  });
</script>

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
              <img src="assets/images/logo1.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.html">Beranda</a></li>
              <li><a href="details.php">Detail</a></li>
              <li><a href="author.php">Ulasan</a></li>
              <li><a href="create.html" class="active">Pesan Sekarang!</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <?php
  // Koneksi ke database MySQL
  $servername = "localhost";  // Ganti dengan nama server database Anda
  $username = "root";     // Ganti dengan nama pengguna database Anda
  $password = "";     // Ganti dengan kata sandi database Anda
  $dbname = "sewa";  // Ganti dengan nama database Anda

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Periksa koneksi
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }

  // Ambil data dari database (contoh, Anda harus menggantinya sesuai dengan struktur tabel Anda)
  $sql = "SELECT * FROM penyewaan_ps ORDER BY id DESC LIMIT 1";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Mengisi nilai formulir dengan data dari database
    $row = $result->fetch_assoc();
    $kodePembayaran = $row["id"];
    $jenisKonsol = $row["description"];
    $namaLengkap = $row["nama"];
    $wa = $row["wa"];
    $tanggalPinjam = $row["tanggal_pinjam"];
    $tanggalKembali = $row["tanggal_kembali"];
    $durasi = $row["durasi"];
    $harga = $row["harga"];
  } else {
    echo "Tidak ada data ditemukan.";
  }

  $conn->close();
  ?>
  <!-- ***** Header Area End ***** -->
  <div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2 style="margin-bottom: 30px;">Nota <em>Pemesanan</em></h2>
            <p style="margin-bottom: 10px;">Simpan nota pemesanan lalu tunjukkan kepada karyawan ketika mengambil barang!</p>
            <p>Lakukan pembayaran hanya dengan metode COD</p>
          </div>
        </div>
        <div class="col-lg-8 mx-auto">
          <form id="contact" action="" method="post">
            <div class="row justify-content-center">
              <div class="col-8">
                <span class="bid">
                  <p class="mb-0">ID <span id="id"><?php echo $kodePembayaran; ?></span></p>
                  <p class="mb-0">Jenis Konsol <span id="description"><?php echo $jenisKonsol; ?></span></p>
                  <p class="mb-0">Nama Lengkap <span id="nama"><?php echo $namaLengkap; ?></span></p>
                  <p class="mb-0">Tanggal Pesan <span id="check-in"><?php echo $tanggalPinjam; ?></span></p>
                  <p class="mb-0">Tanggal Kembali <span id="check-out"><?php echo $tanggalKembali; ?></span></p>
                  <p class="mb-0">Durasi Pemesanan <span id="durasi"><?php echo $durasi; ?> hari</span></p>
                  <p class="mb-0">Harga <span id="harga"><?php echo $harga; ?></span></p>
                  <p class="mb-0">No Whatsapp <span id="nama"><?php echo $wa; ?></span></p>
                </span>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2023 <a href="#">Joy Gaze</a> Penyewaan konsol terbaik.
            &nbsp;&nbsp;
            Designed by <a title="HTML CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
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

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>