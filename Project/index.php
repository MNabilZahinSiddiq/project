<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan IMT (Index Massa Tubuh)</title>

    <!-- Memanggil file css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- div utama -->
    <div class="container">
            <!-- Image utama -->
            <img src="./image/scale_balance_icon_137224.png" alt="">

            <!-- PHP -->
            <?php

                // Judul Project : IMT ( Index Massa Tubuh )
                // Merubah tinggi dari centimeter ke meter
                $tinggi = @$_POST['tinggi_badan'];

                // Percabanagan untuk mencari nilai akhir
                if (@$_POST['berat_badan'] == "" || @$_POST['tinggi_badan'] == "") {
                    echo "<p style='text-align: center; margin: 10px 0;'>Silahkan masukkan berat badan dan tinggi anda!</p>";
                } else {
                    echo "<h1>IMT</h1>";

                    // Mencari nilai tingkat obesitas
                    $obesitas = $_POST['berat_badan'] / ($tinggi * $tinggi);

                    // Percabangan untuk menentukan nilai dari IMT
                    if ($obesitas < 15) {
                        $tingkat = "Sangat kurus";
                    } else if ($obesitas >= 15 && $obesitas < 18.5) {
                        $tingkat = "Kurus";
                    } else if ($obesitas >= 18.5 && $obesitas < 25) {
                        $tingkat = "Normal";
                    } else if ($obesitas >= 25 && $obesitas < 30) {
                        $tingkat = "Berlebih (kegemukan)";
                    } else if ($obesitas >= 30 && $obesitas < 35) {
                        $tingkat = "Obesitas Tingkat I";
                    } else if ($obesitas >= 35 && $obesitas < 40) {
                        $tingkat = "Obesitas Tingkat II";
                    } else {
                        $tingkat = "Obesitas Tingkat III";
                    }

                    // Output IMT
                    echo "<h2>" . $tingkat . "</h1>"; 
                }
            ?>

            <!-- Form untuk pengisian data -->
            <form action="" method="POST">
                <!-- Pembagian div untuk mempermudah proses styling -->
                <div class="form-group">
                    <input type="text" name="berat_badan" id="" placeholder="Berat Badan (kg)">
                </div>
                <div class="form-group">
                    <input type="text" name="tinggi_badan" id="" placeholder="Tinggi Badan (m)">
                </div>

                <!-- Button dengan tipe submit untuk mengisi data yang diisi di form input -->
                <button type="submit">Kirim</button>
            </form>
    </div>
</body>
</html>