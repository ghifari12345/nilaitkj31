<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Jika belum login, redirect ke login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Styling untuk tombol Logout */
        .logout-btn {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: green;
            color: white;
            text-align: center;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            font-size: 16px;
            font-family: Arial, sans-serif;
            width: 100px; /* Lebar tombol diatur menjadi lebih pendek */
            margin-left: auto; /* Untuk memposisikan di kanan */
        }

        .logout-btn:hover {
            background-color: darkgreen;
        }

        /* Posisikan tombol Logout di sebelah kanan */
        .logout-container {
            text-align: right;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Logout button di dalam container -->
    <div class="logout-container">
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
<br>


<div class="card">
    <div class="card-body">
        <p><img src="images/RGI.jpg" alt="rgi" class="card-img rounded" >
            <p>Rumah Gemilang Indonesia (RGI), berdiri di lahan wakaf seluas 2.300 meter persegi yang bertempat di Kampung Kebon Kopi, Kelurahan Pengasinan, Kecamatan Sawangan, Kota Depok Jawa Barat. Rumah Gemilang Indonesia merupakan sebuah unit program pemberdayaan dan pusat pelatihan (empowering and training center) di bawah direktorat Program Lembaga Amil Zakat Nasional Alazhar. Secara resmi, RGI mulai beroperasi sejak 1 Juni 2009 dengan melakukan sosialisasi kepada masyarakat. Sebagai bagian dari program pemberdayaan Lembaga Amil Zakat Nasional Alazhar, RGI mengadopsi model pesantren yang fokus pada penyelenggaraan pendidikan non formal dalam kemasan short course (kursus singkat). Perpaduan ini bertujuan agar para peserta pelatihan RGI tidak hanya menyerap pengetahuan dan keterampilan unggul yang menjadi pondasi masa depan mereka, tapi juga memiliki pengetahuan akidah islam yang baik. Rumah Gemilang Indonesia saat ini telah membuka delapan jurusan yaitu:
                <ol>
                    <li>Kelas Tatabusana <br>
                    Disini siwa akan belajar keterampilan mengenai dunia fashion merancang sebuah pola dan mengoprasikan mesin jahit
                    </li>
                    <li>Kelas Fotografi dan Videografi <br>
                    Disini siswa akan belajar keterampilan mengenai editing foto dan video. Pengambilan foto dan video secara benar dan profesional.
                    </li>
                    <li>Kelas Desain Grafis <br>
                    Disini siswa akan belajar keterampilan mengenai bagaimana menjadi seorang desainer handal.
                    </li>
                    <li>Kelas Teknik Komputer dan Jaringan <br>
                    Disini siswa akan belajar keterampilan mengenai dunia IT seperti jaringan, web, mikrotik, hardware dan software.                    </li>
                    <li>Kelas Aplikasi Perkantoran <br>
                    Disini siswa akan belajar keterampilan mengenai beberapa aplikasi yang ada di perkantoran seperti akun sosial media dan Microsoft Office.                    </li>
                    <li>Kelas Otomotif <br>
                    Disini siswa akan belajar keterampilan mengenai dunia mekanik dan perbengkelan seperti belajar kerja mesin, kelistrikan, service dan manajemen bengkel.                    </li>
                    <li> Kelas Kelistrikan <br>
                    Disini siswa akan belajar keterampilan installasi listrik rumah tangga, pemanfaatan tenaga listrik, pemasangan dan pengopersian sistem distribusi.                    </li>
                    <li>Kelas Rekayasa Perangkat Lunak<br>
                    Disini siswa akan belajar keterampilan membuat web, game dan bahas pemrograman html, java script dan style sheet.                    </li>
                </ol>
            </p>
        </p>
    </div>
</div>