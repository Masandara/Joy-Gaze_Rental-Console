<?php
// proses.php
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

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $wa = $_POST["wa"];
    $jenis_ps = $_POST["description"];
    $tanggal_pinjam = $_POST["check-in"];
    $tanggal_kembali = $_POST["check-out"];
    $durasi = $_POST["durasi"];
    $harga = $_POST["harga"];

    // Check stock availability
    $sqlCheckStock = "SELECT stock FROM consoles WHERE name = '$jenis_ps'";
    $result = $conn->query($sqlCheckStock);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $currentStock = $row["stock"];

        // Verify if there is enough stock
        if ($currentStock > 0) {
            // Insert data into the database
            $sqlInsert = "INSERT INTO penyewaan_ps (nama, wa, description, tanggal_pinjam, tanggal_kembali, durasi, harga) 
               VALUES ('$nama', '$wa', '$jenis_ps', '$tanggal_pinjam', '$tanggal_kembali', '$durasi', '$harga')";

            if ($conn->query($sqlInsert) === TRUE) {
                // Reduce stock in the 'consoles' table
                $sqlUpdateStock = "UPDATE consoles SET stock = stock - 1 WHERE name = '$jenis_ps'";
                $conn->query($sqlUpdateStock);

                // Redirect to nota.php without payment code
                header("Location: nota.php");
                exit();
            } else {
                echo "Error: " . $sqlInsert . "<br>" . $conn->error;
            }
        } else {
            echo "Stok untuk $jenis_ps habis. Pesanan tidak dapat diproses.";
            // Redirect to stok_habis.html with the specific console type
            header("Location: abis.php?jenis_ps=$jenis_ps");
        }
    } else {
        echo "Error: " . $sqlCheckStock . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
