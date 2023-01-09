<?php

include "koneksi.php";

function registrasi($data){
    global $db;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $konfirmasi_password = mysqli_real_escape_string($db, $data["konfirmasi_password"]);

   //cek username sudah ada atau belum
   $result = mysqli_query($db,"SELECT username FROM user WHERE username = '$username'");

   if (mysqli_fetch_array($result)){

    echo "<script>
            alert ('username sudah terdaftar!')    
          </script>";
          return false;
   }
      
   //cek konfirmasi password 
    if ($password !== $konfirmasi_password){

        echo "<script>                
                alert ('Konfirmasi Password Tidak Sesuai!');        
              </script>";
              return false;
    }
    
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    //tambahkan user baru ke database
    mysqli_query ($db, "INSERT INTO user VALUES ('','$username','$password')");

    return mysqli_affected_rows($db);
}

if (isset ($_POST["register"])){

    if (registrasi ($_POST) > 0){
        echo "<script>
                alert ('user baru berhasil ditambahkan!'); 
                document.location= 'login.php';      
              </script>";
    } else {
        echo mysqli_error ($db);
    }
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
        background: lightblue;
    }
    h2{
        text-align: center;        
    }
    h3{
        text-align: center;
    }
    form{
        text-align: center;
    }
</style>
<body>
    
    <h2><u>SURVEILANS TERPADU PENYAKIT</u></h2>
    <h3><u>Silahkan Registrasi:</u></h3>

    <form action="" method="post">
    <p><label for="username">Username:</label>
    <input type="text" name="username" id="username" required></p>
    <p><label for="password">Password:</label>
    <input type="password" name="password" id="password" required></p>
    <p><label for="konfirmasi_password">Konfirmasi Password:</label>
    <input type="password" name="konfirmasi_password" id="konfirmasi_password" required></p>
    <a href="login.php">Kembali ke halaman Login</a>
    <p><button type="submit" name="register">Register</button></p>    
    </form>

</body>
</html>