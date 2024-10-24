<?php
session_start();
include("config.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Menggunakan MD5 untuk hashing password

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header('Location: index.php'); // Jika login berhasil, redirect ke home.php
    } else {
        echo "<p style='color:red; text-align:center;'>Username atau password salah!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('images/gambar.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            padding: 40px;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.1); /* Sangat transparan */
            border: 1px solid rgba(255, 255, 255, 0.3); /* Border sangat tipis dan transparan */
        }

        .login-container h1 {
            text-align: center;
            color: #fff; /* Warna teks putih agar kontras dengan background */
        }

        .login-container label {
            font-size: 14px;
            color: #fff; /* Warna teks putih */
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid rgba(255, 255, 255, 0.3); /* Border input transparan */
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2); /* Input field sedikit transparan */
            color: #fff; /* Teks putih */
        }

        .login-container input[type="text"]::placeholder,
        .login-container input[type="password"]::placeholder {
            color: #ccc; /* Placeholder warna abu-abu */
        }

        .login-container button {
            width: 100%;
            background-color: rgba(76, 175, 80, 0.8); /* Warna hijau dengan sedikit transparansi */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: rgba(76, 175, 80, 1); /* Hijau solid saat hover */
        }

        .login-container p {
            text-align: center;
            margin-top: 20px;
            color: #fff; /* Teks putih */
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login</h1>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="Masukkan username" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Masukkan password" required><br>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>

</body>
</html>

