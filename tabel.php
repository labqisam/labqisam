<?php
session_start();   

if (!isset($_SESSION["login"])){
 header ("location: login.php");
 exit;
}

require "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STP / TABEL</title>
</head>
<style>
    body{
        background: lightgreen;
    }
    table{
        background: lightblue;
    }
    .cetak{
        position: absolute;
        top: 10px;
        left: 20px;
    }
    .logout{
        position: absolute;
        top: 10px;
        right: 20px;
    }
    .kabupaten{
        position: absolute;
        top: 122px;
        right: 20px;
    }
    .h1{
        text-align: center;
    }
    .button{
        text-align: center;
    }
    .td{
        text-align: center;
    }
    .fixed{
        position: fixed;
    }
    table{
        margin: auto;
    }
</style>

<body>

<div class="container">

    <div class="cetak"><button><a href="cetak.php" target="blank">Export to PDF / Print</a></button></div>
    <div class="logout"><button><a href="logout.php">Logout</a></button></div>

    <div class="h1"><h1><u>Surveilans Terpadu Penyakit</u></h1></div>

    <div class="button"><p><button><a href="tambah.php">Tambah Data</a></button></p></div>
    
    <div class="tanggal">
    <button onclick="displayDate()">Tanggal Input:</button> <br><textarea name="" id="demo" cols="25" rows="1"></textarea>
    </div>
    <div class="kabupaten">
        <label for="">Kabupaten/Kota:</label><br>
        <select name="" id="kabupaten">
            <option value=""></option>
            <option value="">Kendari</option>
            <option value="">Konawe</option>
            <option value="">Konawe Selatan</option>
            <option value="">Konawe Utara</option>
            <option value="">Kolaka Timur</option>
            <option value="">Kolaka</option>
            <option value="">Kolaka Utara</option>
            <option value="">Bombana</option>
            <option value="">Konawe Kepulauan</option>
            <option value="">Muna</option>
            <option value="">Muna Barat</option>
            <option value="">Bau-Bau</option>
            <option value="">Buton</option>
            <option value="">Buton Utara</option>
            <option value="">Buton Tengah</option>
            <option value="">Buton Selatan</option>
            <option value="">Wakatobi</option>
        </select>
    </div>

    <table border="1" cellpadding="2">
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Nama Penyakit</th>
                <th colspan="2">< 1 Tahun</th>
                <th colspan="2">1 - 4 Tahun</th>
                <th colspan="2">5 - 9 Tahun</th>
                <th colspan="2">10 - 14 Tahun</th>
                <th colspan="2">15 - 19 Tahun</th>
                <th colspan="2">20 - 44 Tahun</th>
                <th colspan="2">45 - 54 Tahun</th>
                <th colspan="2">55 - 59 Tahun</th>
                <th colspan="2">60 - 69 Tahun</th>
                <th colspan="2">70+ Tahun</th>
                <th colspan="2">Jumlah</th>
                <th rowspan="2">Jumlah Kunjungan</th>
                <th rowspan="2"></th>      
            </tr>
            <tr>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th> 
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>                                               
            </tr>
            <tr>
                <?php
                $no = 1;
                $tampil = mysqli_query($db, "SELECT * FROM umur1 order by id asc");
                $total1= 0;
                $total2= 0;
                $total3= 0;
                $total4= 0;
                $total5= 0;
                $total6= 0;
                $total7= 0;
                $total8= 0;
                $total9= 0;
                $total10= 0;
                $total11= 0;
                $total12= 0;
                $total13= 0;
                $total14= 0;
                $total15= 0;
                $total16= 0;
                $total17= 0;
                $total18= 0;
                $total19= 0;
                $total20= 0;
                $total21= 0;
                $total22= 0;              
                $total = 0;
                while ($data = mysqli_fetch_array($tampil)):
                       $total1 += $data["jumlah_pria"];
                       $total2 += $data["jumlah_wanita"];
                       $total3 += $data["jumlah_pria2"];
                       $total4 += $data["jumlah_wanita2"];
                       $total5 += $data["jumlah_wanita3"];
                       $total6 += $data["jumlah_wanita3"];
                       $total7 += $data["jumlah_pria4"];
                       $total8 += $data["jumlah_wanita4"];
                       $total9 += $data["jumlah_pria5"];
                       $total10 += $data["jumlah_wanita5"];
                       $total11 += $data["jumlah_pria6"];
                       $total12 += $data["jumlah_wanita6"];
                       $total13 += $data["jumlah_pria7"];
                       $total14 += $data["jumlah_wanita7"];
                       $total15 += $data["jumlah_pria8"];
                       $total16 += $data["jumlah_wanita8"];
                       $total17 += $data["jumlah_pria9"];
                       $total18 += $data["jumlah_wanita9"];
                       $total19 += $data["jumlah_pria10"];
                       $total20 += $data["jumlah_wanita10"];
                       $total21 += $data["jumlah1"];
                       $total22 += $data["jumlah2"];
                       $total += $data["jumlah"];
                ?>
                <td><div class="td"><?php echo $no++;?></div></td>                
                <td><div class="td"><?php echo $data["nama_penyakit"];?></div></td>                
                <td><div class="td"><?php echo $data["jumlah_pria"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_wanita"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_pria2"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_wanita2"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_pria3"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_wanita3"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_pria4"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_wanita4"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_pria5"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_wanita5"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_pria6"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_wanita6"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_pria7"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_wanita7"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_pria8"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_wanita8"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_pria9"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_wanita9"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_pria10"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah_wanita10"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah1"];?></div></td>                
                <td><div class="td"><?php echo $data["jumlah2"];?></div></td>
                <td><div class="td"><?php echo $data["jumlah"];?></div></td>
                <td><div class="td">
                        <button><a href="edit.php?hal=edit&id=<?php echo $data["id"];?>">Edit</a></button>
                        <button><a href="hapus.php?hal=hapus&id=<?php echo $data["id"];?>" onclick = "return confirm('Hapus Data?')">Hapus</a></button>
                    </div>
                </td>
            </tr>
            <?php endwhile;?>
            <tr>
                <th colspan="2">Total</th>
                <th><?php echo $total1;?></th>
                <th><?php echo $total2;?></th>
                <th><?php echo $total3;?></th>
                <th><?php echo $total4;?></th>
                <th><?php echo $total5;?></th>
                <th><?php echo $total6;?></th>
                <th><?php echo $total7;?></th>
                <th><?php echo $total8;?></th>
                <th><?php echo $total9;?></th>
                <th><?php echo $total10;?></th>
                <th><?php echo $total11;?></th>
                <th><?php echo $total12;?></th>
                <th><?php echo $total13;?></th>
                <th><?php echo $total14;?></th>
                <th><?php echo $total15;?></th>
                <th><?php echo $total16;?></th>
                <th><?php echo $total17;?></th>
                <th><?php echo $total18;?></th>
                <th><?php echo $total19;?></th>
                <th><?php echo $total20;?></th>
                <th><?php echo $total21;?></th>
                <th><?php echo $total22;?></th>
                <th><?php echo $total;?></th>
                <th></th>
                
            </tr>
    </table>
</div>

<script>
    function displayDate() {
    document.getElementById("demo").innerHTML = Date();
    }
</script>

    </body>
</html>