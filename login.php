<?php

session_start();

if (isset($_SESSION["login"])){
    header ("location: tabel.php");
    exit;
}

require "koneksi.php";

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db,"SELECT * FROM user WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) === 1){

        //cek password
        $row = mysqli_fetch_array($result);
        if (password_verify($password, $row["password"])){

            //set session
            $_SESSION["login"] = true;

            header("location: tabel.php");

            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        background: pink;
    }
    h1{
        text-align: center;
    }
    h3{
        text-align: center;
    }
    h4{
        text-align: center;
    }
    form{
        text-align: center;
    }
</style>

<body>
    
    <h1>SURVEILANS TERPADU PENYAKIT</h1>
    <h3><u>Silahkan Login:</u></h3>

    <h4><?php if (isset($error)): ?>
        <p style = "color:red; font-style:italic;">Username / Password Salah!</p>
    <?php endif; ?></h4>

    <form action="" method="post">
        <p><label for="username">Username:</label>
        <input type="text" name="username" id="username"></p>
        <p><label for="password">Password:</label>
        <input type="password" name="password" id="password"></p>
        <p><button type="submit" name="login">Login</button></p>
        Belum punya akun? Silahkan registrasi <a href="registrasi.php">di sini</a>
    </form>

</body>
</html>