<?php
    session_start();   

    if (!isset($_SESSION["login"])){
    header ("location: login.php");
    exit;
    }
    require "koneksi.php";

    if (isset($_POST["submit"])){

            $nama_penyakit = $_POST["nama_penyakit"];
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
            
            $result = mysqli_query($db, "SELECT nama_penyakit FROM umur1 
                                         WHERE nama_penyakit = '$nama_penyakit'");

            if(mysqli_fetch_array($result)){
                echo 
                "<script>
                    alert ('Salah menginputkan Nama Penyakit. Nama penyakit sudah ada!')
                    document.location='tambah.php';
                </script>";
            
            } else {
                        
            $insert = mysqli_query($db, "INSERT INTO umur1 
                                         VALUES ('','$nama_penyakit',
                                                    '$jumlah_pria',
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
                                                    '$jumlah_pria7',
                                                    '$jumlah_wanita7',
                                                    '$jumlah_pria8',
                                                    '$jumlah_wanita8',
                                                    '$jumlah_pria9',
                                                    '$jumlah_wanita9',
                                                    '$jumlah_pria10',
                                                    '$jumlah_wanita10',
                                                    '$jumlah1',
                                                    '$jumlah2',
                                                    '$jumlah')");           
            if($insert){
                echo 
                "<script>                    
                    alert ('Tambah data BERHASIL!')
                    document.location='tabel.php';
                </script>";
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
    <title>STP PUSKESMAS / INPUT</title>
</head>
<style>
    body{
        background: lightblue;
    }
    form{       
        text-align: center;
    }
    /* label{
        display:inline-block;
        width:120px;
        margin:5px 0px 5px 5px;
    } */
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
    .td{
        text-align: center;
    }    
</style>
<body>

    <div class="back"><button><a href="tabel.php">Kembali Ke Home</a></button></div>
    <div class="logout"><button><a href="logout.php">Logout</a></button></div>

    <form action="" method="post">
        
        <h2><u>Silahkan Input Data Disini</u></h2>

        <p><label for="nama_penyakit"><b>Nama Penyakit</b>:</label>
        <select name="nama_penyakit" id="nama_penyakit" required>
            <option value="<?php echo @$nama_penyakit?>"><?php echo @$nama_penyakit?></option>
            <option value="Kolera">Kolera</option>
            <option value="Diare">Diare</option>
            <option value="Diare Berdarah">Diare Berdarah</option>
            <option value="Tipus Perut Klinis">Tipus Perut Klinis</option>
            <option value="TB Paru BTA (+)">TB Paru BTA (+)</option>
            <option value="Tersangka TB Paru">Tersangka TB Paru</option>
            <option value="Kusta PB">Kusta PB</option>
            <option value="Kusta MB">Kusta MB</option>
            <option value="Campak">Campak</option>
            <option value="Dipteri">Dipteri</option>
            <option value="Batuk Rejan">Batuk Rejan</option>
            <option value="Tetanus">Tetanus</option>
            <option value="Hepatitis Klinis">Hepatitis Klinis</option>
            <option value="Malaria Klinis">Malaria Klinis</option>
            <option value="Malaria Vivax">Malaria Vivax</option>
            <option value="Malaria Falcifarum">Malaria Falcifarum</option>
            <option value="Malaria Mix">Malaria Mix</option>
            <option value="Demam Berdarah Dengue">Demam Berdarah Dengue</option>
            <option value="Demam Dengue">Demam Dengue</option>
            <option value="Pneumonia">Pneumonia</option>
            <option value="Sifilis">Sifilis</option>
            <option value="Gonorhoe">Gonorhoe</option>
            <option value="Frambusia">Frambusia</option>
            <option value="Filariasis">Filariasis</option>
            <option value="Influenza">Influenza</option>
            <option value="Hipertensi">Hipertensi</option>
            <option value="Diabetes Millitus">Diabetes Millitus</option>
            <option value="TB BTA(-) Ro(+)">TB BTA(-) Ro(+)</option>
            <option value="TB Ekstra Paru">TB Ekstra Paru</option>
            <option value="AFP">AFP</option>
            <option value="ISPA Bukan Pneumonia">ISPA Bukan Pneumonia</option>
            <option value="HIV">HIV</option>
            <option value="AIDS">AIDS</option>
            <option value="Rabies">Rabies</option>
            <option value="Suspek Flu Burung">Suspek Flu Burung</option>
            <option value="Jantung">Jantung</option>
            <option value="Kanker">Kanker</option>
            <option value="Kecelakaan Lalulintas">Kecelakaan Lalulintas</option>
        </select></p>
----------------------------------------------------------------------------------------------        
        <p><label for="pria"><b>Laki-laki</b><u>(< 1 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria"  
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
        
        <p><label for="wanita"><b>Perempuan</b> <u>(< 1 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita"  
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------               
        <p><label for="pria"><b>Laki-laki</b> <u>(1 - 4 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria2"  
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
        
        <p><label for="wanita"><b>Perempuan</b> <u>(1 - 4 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita2"  
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------               
        <p><label for="pria"><b>Laki-laki</b> <u>(5 - 9 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria3"  
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
        
        <p><label for="wanita"><b>Perempuan</b> <u>(5 - 9 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita3"  
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------
        <p><label for="pria"><b>Laki-laki</b> <u>(10 - 14 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria4"  
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
        
        <p><label for="wanita"><b>Perempuan</b> <u>(10 - 14 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita4"  
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------        
        <p><label for="pria"><b>Laki-laki</b> <u>(15 - 19 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria5"  
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
        
        <p><label for="wanita"><b>Perempuan</b> <u>(15 - 19 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita5"  
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------
        <p><label for="pria"><b>Laki-laki</b> <u>(20 - 44 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria6"  
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
        
        <p><label for="wanita"><b>Perempuan</b> <u>(20 - 44 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita6"  
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------
        <p><label for="pria"><b>Laki-laki</b> <u>(45 - 54 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria7"  
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
        
        <p><label for="wanita"><b>Perempuan</b> <u>(45 - 54 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita7"  
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------
        <p><label for="pria"><b>Laki-laki</b> <u>(55 - 59 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria8"  
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
        
        <p><label for="wanita"><b>Perempuan</b> <u>(55 - 59 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita8"  
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------
        <p><label for="pria"><b>Laki-laki</b> <u>(60 - 69 Tahun)</u>:</label>
        <input type="number" name="jumlah_pria9"  
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
        
        <p><label for="wanita"><b>Perempuan</b> <u>(60 - 69 Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita9"  
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------
        <p><label for="pria"><b>Laki-laki</b> <u>(70+ Tahun)</u>:</label>
        <input type="number" name="jumlah_pria10"  
               placeholder="Jumlah Kasus Laki-laki" id="pria" required></p>
        
        <p><label for="wanita"><b>Perempuan</b> <u>(70+ Tahun)</u>:</label>
        <input type="number" name="jumlah_wanita10"  
               placeholder="Jumlah Kasus Perempuan" id="wanita" required></p>
----------------------------------------------------------------------------------------------
        <!-- Awal Form Total Jenis Kelamin -->
        <p><button type="button" onclick="sumPria();">Totalkan Laki-laki</button>
            <input type="number" onchange="sum();" name="jumlah1"  
                   placeholder="Total Laki-laki" id="jumlah1" required> |  
                
        <input type="number" onchange="sum();" name="jumlah2"  
               placeholder="Total Perempuan" id="jumlah2" required>
        <button type="button" onclick="sumWanita();">Totalkan Perempuan</button></p>
        <!-- Akhir Form Total Jenis Kelamin -->

        <!-- Awal Form Total -->
        <button type="button" onclick="sum();">Total</button>
       
        <p><label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" 
               placeholder="Jumlah Kasus" id="jumlah" required> </p>
        <p><button type="submit" name="submit">Submit</a></button></p>
        <!-- Akhir Form Total -->              
    </form>

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