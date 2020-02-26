<?php
require 'php.php';
$data = $_GET["id_interiorr"];
$values = looping("SELECT * FROM objek_foosel_admin WHERE id = $data");
  //var_dump($values);
$id_jenis_interior = $values[0]["id_jenis_interior"];
$nama_interior = $values[0]["nama"];//ditambah [0] karena yang diperiksa hanya 1 id yg terdeklarasi dan diinputkan pada 1 array yaitu array[0]..
$harga_interior = $values[0]["harga"];
$gambar_interior = $values[0]["gambar"];
$ukuran = $values[0]["ukuran_objek"];
$waktu = $values[0]["waktu"];
$values1 = looping("SELECT * FROM jenis_interior WHERE id_jenis_interior = $id_jenis_interior");
$jenis_interior = $values1[0]["jenis_interior"];
$id_warna_dominan = $values[0]["id_warna_dominan"];
$values2 = looping("SELECT * FROM warna_dominan WHERE id_warna_dominan = $id_warna_dominan");
$warna_dominan = $values2[0]["warna_dominan"];
$id_type_bangunan = $values[0]["id_type_bangunan"];
$values3 = looping("SELECT * FROM type_bangunan WHERE id_type_bangunan = $id_type_bangunan");
$type_bangunan = $values3[0]["type_bangunan"];
$id_lokasi_rekomendasi= $values[0]["id_lokasi_rekomendasi"];
$values4 = looping("SELECT * FROM lokasi_rekomendasi WHERE id_lokasi_rekomendasi = $id_lokasi_rekomendasi");
$lokasi_rekomendasi= $values4[0]["lokasi_rekomendasi"];
$lokasi_pernah_diterapkan = $values[0]["lokasi_pernah_diterapkan"];
$deskripsi_interior = $values[0]["deskripsi"];
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
    <title>Interior</title>
  </head>

  <body>
    <nav class="nav" style="background-color: #0A564C;">
        <a class="text-light font-weight-bold" style="font-family: Times New Roman; font-size:20px; text-decoration:none;" href="interioradmin.php">
          Data Interior
        </a>
    </nav>
    <div class="ruang"></div>
    <div class="circle" style="height: 150px; width: 150px;">
      <a href="interioradmin.php">
        <img src="foosel.jpg" alt="foosel" style="height: 150px; width: 150px;">
      </a>
    </div>
    <div class="form-row">
      <div class="artadminimg dataart">
        <img src="gambar_interior/<?=$gambar_interior?>" alt="<?=$nama_interior?>" class="rounded" style="height: 300px; 
          width: 300px; ">
      </div>
      <div class="card" style="margin-top:100px; margin-left:5px; width: 960px; background-color: #0A564C;">
            <blockquote class="blockquote mb-0">
              <p style="font-family: Times New Roman; font-size:25px; text-align: center; font-weight: bold; text-transform: uppercase; color: #fff;"><?=$nama_interior?></p>
              <div class="form-row" style="text-align: center;">
                <div class="col-md-6 mb-3">
                  <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff; text-transform: capitalize;">Jenis Art : <?=$jenis_interior?></p>
                </div>
                <div class="col-md-6 mb-3">
                  <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff; text-transform: capitalize;">Warna Dominan : <?=$warna_dominan?></p>
                </div>
              </div>
              <div class="form-row" style="text-align: center;">
                <div class="col-md-6 mb-3">
                  <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff;">Harga Interior : <?=$harga_interior?></p>
                </div>
                <div class="col-md-6 mb-3">
                  <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff; text-transform: capitalize;">Type Bangunan : <?=$type_bangunan?></p>
                </div>
              </div>
              <div class="form-row" style="text-align: center;">
                <div class="col-md-6 mb-3">
                  <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff;">Ukuran Minimum : <?=$ukuran?></p>
                </div>
                <div class="col-md-6 mb-3">
                   <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff;">Waktu Pembuatan : <?=$waktu?></p>
                </div>
              </div>
              <div class="form-row" style="text-align: center;">
                <div class="col-md-6 mb-3">
                  <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff; text-transform: capitalize;">Lokasi Rekomendasi : <?=$lokasi_rekomendasi?></p>
                </div>
                <div class="col-md-6 mb-3">
                  <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff;">Lokasi Pernah Diterapkan : <?=$lokasi_pernah_diterapkan?></p>
                </div>
              </div>
            </blockquote>
        </div>
    </div>
    <div class="card" style="margin-top:5px; margin-left:45px; width: 1265px; background-color: #0A564C; text-transform: capitalize;">
        <blockquote class="blockquote mb-0" style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff;">
                  <label>Deskripsi Interior :</label>
                  <p><?=$deskripsi_interior?></p>
        </blockquote>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>