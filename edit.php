<?php
        session_start();   

        if (!isset($_SESSION["login"])){
        header ("location: login.php");
        exit;
        }

    require "koneksi.php";

    if (isset($_POST["submit"])){

        if($_GET['hal'] == "edit"){
            //data akan diedit
           
            $jumlah_pria = $_POST["jumlah_pria"];
            $jumlah_wanita = $_POST["jumlah_wanita"];
            $jumlah_pria2 = $_POST["jumlah_pria2"];
            $jumlah_wanita2 = $_POST["jumlah_wanita2"];
            $jumlah_pria3 = $_POST["jumlah_pria3"];
            $jumlah_wanita3 = $_POST["jumlah_wanita3"];
            $jumlah_pria4 = $_POST["jumlah_pria4"];
            $jumlah_wanita4 = $_POST["jumlah_wanita4"];
            $jumlah_pria5 = $_POST["jumlah_pria5"];
            $jumlah_wanita5 = $_POST["jumlah_wanita5"];
            $jumlah_pria6 = $_POST["jumlah_pria6"];
            $jumlah_wanita6 = $_POST["jumlah_wanita6"];
            $jumlah_pria7 = $_POST["jumlah_pria7"];
            $jumlah_wanita7 = $_POST["jumlah_wanita7"];
            $jumlah_pria8 = $_POST["jumlah_pria8"];
            $jumlah_wanita8 = $_POST["jumlah_wanita8"];
            $jumlah_pria9 = $_POST["jumlah_pria9"];
            $jumlah_wanita9 = $_POST["jumlah_wanita9"];
            $jumlah_pria10 = $_POST["jumlah_pria10"];
            $jumlah_wanita10 = $_POST["jumlah_wanita10"];
            $jumlah1 = $_POST["jumlah1"];
            $jumlah2 = $_POST["jumlah2"];
            $jumlah = $_POST["jumlah"];
            
            $update = mysqli_query($db, "UPDATE umur1 SET 
                                                          jumlah_pria = '$_POST[jumlah_pria]',
                                                          jumlah_wanita = '$_POST[jumlah_wanita]',
                                                          jumlah_pria2 = '$_POST[jumlah_pria2]',
                                                          jumlah_wanita2 = '$_POST[jumlah_wanita2]',
                                                          jumlah_pria3 = '$_POST[jumlah_pria3]',
                                                          jumlah_wanita3 = '$_POST[jumlah_wanita3]',
                                                          jumlah_pria4 = '$_POST[jumlah_pria4]',
                                                          jumlah_wanita4 = '$_POST[jumlah_wanita4]',
                                                          jumlah_pria5 = '$_POST[jumlah_pria5]',
                                                          jumlah_wanita5 = '$_POST[jumlah_wanita5]',
                                                          jumlah_pria6 = '$_POST[jumlah_pria6]',
                                                          jumlah_wanita6 = '$_POST[jumlah_wanita6]',
                                                          jumlah_pria7 = '$_POST[jumlah_pria7]',
                                                          jumlah_wanita7 = '$_POST[jumlah_wanita7]',
                                                          jumlah_pria8 = '$_POST[jumlah_pria8]',
                                                          jumlah_wanita8 = '$_POST[jumlah_wanita8]',
                                                          jumlah_pria9 = '$_POST[jumlah_pria9]',
                                                          jumlah_wanita9 = '$_POST[jumlah_wanita9]',
                                                          jumlah_pria10 = '$_POST[jumlah_pria10]',
                                                          jumlah_wanita10 = '$_POST[jumlah_wanita10]',
                                                          jumlah1 = '$_POST[jumlah1]',
                                                          jumlah2 = '$_POST[jumlah2]',
                                                          jumlah = '$_POST[jumlah]'
                                                          WHERE id = '$_GET[id]'");
            
                if($update){
                    echo 
                    "<script>
                        alert ('Edit data BERHASIL!')        
                        document.location='tabel.php';
                    </script>";
                    }

        } else {
            //data akan disimpan baru

            $jumlah_pria = $_POST["jumlah_pria"];
            $jumlah_wanita = $_POST["jumlah_wanita"];
            $jumlah_pria2 = $_POST["jumlah_pria2"];
            $jumlah_wanita2 = $_POST["jumlah_wanita2"];
            $jumlah_pria3 = $_POST["jumlah_pria3"];
            $jumlah_wanita3 = $_POST["jumlah_wanita3"];
            $jumlah_pria4 = $_POST["jumlah_pria4"];
            $jumlah_wanita4 = $_POST["jumlah_wanita4"];
            $jumlah_pria5 = $_POST["jumlah_pria5"];
            $jumlah_wanita5 = $_POST["jumlah_wanita5"];
            $jumlah_pria6 = $_POST["jumlah_pria6"];
            $jumlah_wanita6 = $_POST["jumlah_wanita6"];
            $jumlah_pria7 = $_POST["jumlah_pria7"];
            $jumlah_wanita7 = $_POST["jumlah_wanita7"];
            $jumlah_pria8 = $_POST["jumlah_pria8"];
            $jumlah_wanita8 = $_POST["jumlah_wanita8"];
            $jumlah_pria9 = $_POST["jumlah_pria9"];
            $jumlah_wanita9 = $_POST["jumlah_wanita9"];
            $jumlah_pria10 = $_POST["jumlah_pria10"];
            $jumlah_wanita10 = $_POST["jumlah_wanita10"];
            $jumlah1 = $_POST["jumlah1"];
            $jumlah2 = $_POST["jumlah2"];
            $jumlah = $_POST["jumlah"];
            
            $insert = mysqli_query($db, "INSERT INTO umur1 
                                        VALUES ('',,'$jumlah_pria',
                                                    '$jumlah_wanita',
                                                    '$jumlah_pria2',
                                                    '$jumlah_wanita2',
                                                    '$jumlah_pria3',
                                                    '$jumlah_wanita3',
                                                    '$jumlah_pria4',
                                                    '$jumlah_wanita4',
                                                    '$jumlah_pria5',
                                                    '$jumlah_wanita5',
                                                    '$jumlah_pria6',
                                                    '$jumlah_wanita6',
                                                    $jumlah_pria7',
                                                    '$jumlah_wanita7',
                                                    $jumlah_pria8',
                                                    '$jumlah_wanita8',
                                                    $jumlah_pria9',
                                                    '$jumlah_wanita9',
                                                    $jumlah_pria10',
                                                    '$jumlah_wanita10',
                                                    '$jumlah1',
                                                    '$jumlah2',
                                                    '$jumlah')");
            
                if($insert){
                    echo 
                    "<script>
                            document.location='tabel.php';
                    </script>";
                    }
        }        
    }

    if(isset($_GET['hal'])){
        if($_GET['hal'] == "edit"){
            $tampil = mysqli_query($db, "SELECT * FROM umur1 WHERE id = '$_GET[id]'");
            $data = mysqli_fetch_array($tampil);
            if($data){
                $nama_penyakit = $data["nama_penyakit"];
                $jumlah_pria = $data["jumlah_pria"];
                $jumlah_wanita = $data["jumlah_wanita"];
                $jumlah_pria2 = $data["jumlah_pria2"];
                $jumlah_wanita2 = $data["jumlah_wanita2"];
                $jumlah_pria3 = $data["jumlah_pria3"];
                $jumlah_wanita3 = $data["jumlah_wanita3"];
                $jumlah_pria4 = $data["jumlah_pria4"];
                $jumlah_wanita4 = $data["jumlah_wanita4"];
                $jumlah_pria5 = $data["jumlah_pria5"];
                $jumlah_wanita5 = $data["jumlah_wanita5"];
                $jumlah_pria6 = $data["jumlah_pria6"];
                $jumlah_wanita6 = $data["jumlah_wanita6"];
                $jumlah_pria7 = $data["jumlah_pria7"];
                $jumlah_wanita7 = $data["jumlah_wanita7"];
                $jumlah_pria8 = $data["jumlah_pria8"];
                $jumlah_wanita8 = $data["jumlah_wanita8"];
                $jumlah_pria9 = $data["jumlah_pria9"];
                $jumlah_wanita9 = $data["jumlah_wanita9"];
                $jumlah_pria10 = $data["jumlah_pria10"];
                $jumlah_wanita10 = $data["jumlah_wanita10"];
                $jumlah1 = $data["jumlah1"];
                $jumlah2 = $data["jumlah2"];
                $jumlah = $data["jumlah"];
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STP PUSKESMAS / EDIT</title>
</head>
<style>
    body{
        background: lightgreen;
    }
    form{        
        text-align: center;
    }
    .back{
        position: fixed;
        top: 10px;
        left: 20px;
    }
    .logout{
        position: fixed;
        top: 10px;
        right: 20px;
    }
    table{
        margin: auto;
    }
</style>
<body>

    <div class="back"><button><a href="tabel.php">Kembali Ke Home</a></button></div>
    <div class="logout"><button><a href="logout.php">Logout</a></button></div>

    <form action="" method="post">

        <h2><u>Silahkan Edit Data Disini</u></h2>
 
        <label for="nama_penyakit"><b>Nama Penyakit:</b> <h2><?php echo @$nama_penyakit?></h2></label>         
----------------------------------------------------------------------------------------------                        
        <p><label for="pria"><b>Laki-laki</b> <u>(< 1 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria" value="<?php echo @$jumlah_pria;?>" 
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
        
        <p><label for="wanita"><b>Perempuan</b> <u>(< 1 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita" value="<?php echo @$jumlah_wanita;?>" 
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------               
        <p><label for="pria"><b>Laki-laki</b> <u>(1 - 4 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria2" value="<?php echo @$jumlah_pria2;?>" 
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
               
        <p><label for="wanita"><b>Perempuan</b> <u>(1 - 4 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita2" value="<?php echo @$jumlah_wanita2;?>" 
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
-----------------------------------------------------------------------------------------------
        <p><label for="pria"><b>Laki-laki</b> <u>(5 - 9 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria3" value="<?php echo @$jumlah_pria3;?>" 
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
               
        <p><label for="wanita"><b>Perempuan</b> <u>(5 - 9 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita3" value="<?php echo @$jumlah_wanita3;?>" 
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------
        <p><label for="pria"><b>Laki-laki</b> <u>(10 - 14 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria4" value="<?php echo @$jumlah_pria4;?>" 
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
               
        <p><label for="wanita"><b>Perempuan</b> <u>(10 - 14 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita4" value="<?php echo @$jumlah_wanita4;?>" 
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------        
        <p><label for="pria"><b>Laki-laki</b> <u>(15 - 19 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria5" value="<?php echo @$jumlah_pria5;?>" 
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
               
        <p><label for="wanita"><b>Perempuan</b> <u>(15 - 19 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita5" value="<?php echo @$jumlah_wanita5;?>" 
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------        
        <p><label for="pria"><b>Laki-laki</b> <u>(20 - 44 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria6" value="<?php echo @$jumlah_pria6;?>" 
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
               
        <p><label for="wanita"><b>Perempuan</b> <u>(20 - 44 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita6" value="<?php echo @$jumlah_wanita6;?>" 
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------     
        <p><label for="pria"><b>Laki-laki</b> <u>(45 - 54 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria7" value="<?php echo @$jumlah_pria7;?>" 
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
               
        <p><label for="wanita"><b>Perempuan</b> <u>(45 - 54 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita7" value="<?php echo @$jumlah_wanita7;?>" 
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------        
        <p><label for="pria"><b>Laki-laki</b> <u>(55 - 59 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria8" value="<?php echo @$jumlah_pria8;?>" 
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
               
        <p><label for="wanita"><b>Perempuan</b> <u>(55 - 59 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita8" value="<?php echo @$jumlah_wanita8;?>" 
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------        
        <p><label for="pria"><b>Laki-laki</b> <u>(60 - 69 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria9" value="<?php echo @$jumlah_pria9;?>" 
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
               
        <p><label for="wanita"><b>Perempuan</b> <u>(60 - 69 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita9" value="<?php echo @$jumlah_wanita9;?>" 
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------        
        <p><label for="pria"><b>Laki-laki</b> <u>(70+ Tahun)</u>:</label>
        <input type="number" name="jumlah_pria10" value="<?php echo @$jumlah_pria10;?>" 
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
               
        <p><label for="wanita"><b>Perempuan</b> <u>(70+ Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita10" value="<?php echo @$jumlah_wanita10;?>" 
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------        
        
        <!-- Awal Form Total Jenis Kelamin -->
        <p><button type="button" onclick="sumPria();">Totalkan Laki-laki</button>
            <input type="number" name="jumlah1"  
                   placeholder="Total Laki-laki" id="jumlah1" required> | 
                
        <input type="number" name="jumlah2"  
               placeholder="Total Perempuan" id="jumlah2" required>
        <button type="button" onclick="sumWanita();">Totalkan Perempuan</button></p>
        <!-- Akhir Form Total Jenis Kelamin -->

        <!-- Awal Form Total -->
        <button type="button" onclick="sum();">Total</button>

        <p><label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" 
               placeholder="Jumlah Kasus" id="jumlah" required> |
        <!-- Akhir Form Total -->

        <button type="submit" name="submit">Submit</a></button></p>
               
    </form>

    </div>

    <script>	
        function sumPria(){		
            var a = document.getElementsByName("jumlah_pria")[0].value;
            var b = document.getElementsByName("jumlah_pria2")[0].value;
            var c = document.getElementsByName("jumlah_pria3")[0].value;
            var d = document.getElementsByName("jumlah_pria4")[0].value;
            var e = document.getElementsByName("jumlah_pria5")[0].value;
            var f = document.getElementsByName("jumlah_pria6")[0].value;
            var g = document.getElementsByName("jumlah_pria7")[0].value;
            var h = document.getElementsByName("jumlah_pria8")[0].value;
            var i = document.getElementsByName("jumlah_pria9")[0].value;
            var j = document.getElementsByName("jumlah_pria10")[0].value;
                        
            var jmlah = parseInt(a) + parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e) + 
                        parseInt(f) + parseInt(g) + parseInt(h) + parseInt(i) + parseInt(j);
            
            document.getElementById("jumlah1").value = jmlah;
        }	
        function sumWanita(){		
            var a = document.getElementsByName("jumlah_wanita")[0].value;
            var b = document.getElementsByName("jumlah_wanita2")[0].value;
            var c = document.getElementsByName("jumlah_wanita3")[0].value;
            var d = document.getElementsByName("jumlah_wanita4")[0].value;
            var e = document.getElementsByName("jumlah_wanita5")[0].value;
            var f = document.getElementsByName("jumlah_wanita6")[0].value;
            var g = document.getElementsByName("jumlah_wanita7")[0].value;
            var h = document.getElementsByName("jumlah_wanita8")[0].value;
            var i = document.getElementsByName("jumlah_wanita9")[0].value;
            var j = document.getElementsByName("jumlah_wanita10")[0].value;
                        
            var jmlah = parseInt(a) + parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e) + 
                        parseInt(f) + parseInt(g) + parseInt(h) + parseInt(i) + parseInt(j);
            
            document.getElementById("jumlah2").value = jmlah;
        }	
        function sum(){		
            var a = document.getElementsByName("jumlah1")[0].value;
            var b = document.getElementsByName("jumlah2")[0].value;
                        
            var jmlah = parseInt(a) + parseInt(b);
            
            document.getElementById("jumlah").value = jmlah;
        }	
	</script> 
    
</body>
</html>