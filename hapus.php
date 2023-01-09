<?php
    session_start();   

    if (!isset($_SESSION["login"])){
    header ("location: login.php");
    exit;
    }
    
require "koneksi.php";

 if ($_GET['hal'] == "hapus"){

    $hapus = mysqli_query($db,"DELETE FROM umur1 WHERE id = '$_GET[id]'");

    if($hapus){
        echo "<script>                
                document.location='tabel.php';
            </script>";
    }
}
?>