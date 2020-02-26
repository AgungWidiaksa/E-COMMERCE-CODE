<?php
require 'php.php';
$data = $_GET["id_furnituree"];
$values = looping("SELECT * FROM objek_foosel_admin WHERE id = $data");
  //var_dump($values);
$id_jenis_furniture = $values[0]["id_jenis_furniture"];
$nama_furniture = $values[0]["nama"];//ditambah [0] karena yang diperiksa hanya 1 id yg terdeklarasi dan diinputkan pada 1 array yaitu array[0]..
$harga_furniture = $values[0]["harga"];
$gambar_furniture = $values[0]["gambar"];
$ukuran = $values[0]["ukuran_objek"];
$values1 = looping("SELECT * FROM jenis_furniture WHERE id_jenis_furniture = $id_jenis_furniture");
$jenis_furniture = $values1[0]["jenis_furniture"];
$id_warna_dominan = $values[0]["id_warna_dominan"];
$values2 = looping("SELECT * FROM warna_dominan WHERE id_warna_dominan = $id_warna_dominan");
$warna_dominan = $values2[0]["warna_dominan"];
$status_furniture = $values[0]["status"];
$deskripsi_furniture = $values[0]["deskripsi"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Furniture</title>
  </head>

  <body>
    <nav class="nav" style="background-color: #0A564C;">
        <a class="text-light font-weight-bold font" style="text-decoration:none;" href="furnitureadmin.php">
          Data Furniture
        </a>
    </nav>
    <div class="ruang"></div>
    <div class="circle" style="height: 150px; width: 150px;">
      <a href="furnitureadmin.php">
        <img src="foosel.jpg" alt="foosel" style="height: 150px; width: 150px;">
      </a>
    </div>
    <div class="form-row">
      <div class="artadminimg dataart">
        <img src="gambar_furniture/<?=$gambar_furniture?>" alt="<?=$nama_furniture?>" class="rounded" style="height: 300px; 
  width: 300px; ">
      </div>
      <div class="card" style="margin-top:100px; margin-left:5px; width: 960px; background-color: #0A564C;">
            <blockquote class="blockquote mb-0">
              <p style="font-family: Times New Roman; font-size:25px; text-align: center; font-weight: bold; text-transform: uppercase; color: #fff;"><?=$nama_furniture?></p>
              <div class="form-row" style="text-align: center;">
                <div class="col-md-6 mb-3">
                  <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff; text-transform: capitalize;">Jenis Furniture : <?=$jenis_furniture?></p>
                </div>
                <div class="col-md-6 mb-3">
                  <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff; text-transform: capitalize;">Warna Dominan : <?=$warna_dominan?></p>
                </div>
              </div>
              <div class="form-row" style="text-align: center;">
                <div class="col-md-6 mb-3">
                  <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff;">Harga Furniture : <?=$harga_furniture?></p>
                </div>
                <div class="col-md-6 mb-3">
                  <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff;">Ukuran Minimum : <?=$ukuran?></p>
                </div>
              </div>
              <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff; text-align: center; text-transform: capitalize;">Status : <?=$status_furniture?></p>
              </div>
            </blockquote>
        </div>
    </div>
    <div class="card" style="margin-top:5px; margin-left:45px; width: 1265px; background-color: #0A564C;">
        <blockquote class="blockquote mb-0" style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff;">
                  <label>Deskripsi Furniture :</label>
                  <p><?=$deskripsi_furniture?></p>
        </blockquote>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>