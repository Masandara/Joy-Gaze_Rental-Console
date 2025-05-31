<?php
include_once("konek.php"); // Memasukkan file konek.php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
     $nama_pelanggan = $_POST["nama_pelanggan"];
     $ulasan = $_POST["ulasan"];
     $waktu = date("Y-m-d H:i:s");
     // Menyimpan data ulasan ke dalam tabel
     $sql = "INSERT INTO ulasan (nama_pelanggan, ulasan, waktu) VALUES ('$nama_pelanggan', '$ulasan', '$waktu')";

     if ($conn->query($sql) === TRUE) {
          header("Location: nota.php");
     } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
     }
}
