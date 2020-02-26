<?php
require 'php.php';
$data = $_GET["id"];
$values = looping("SELECT * FROM objek_foosel_admin WHERE id = $data");
  //var_dump($values);
$nama = $values[0]["nama"];//ditambah [0] karena yang diperiksa hanya 1 id yg terdeklarasi dan diinputkan pada 1 array yaitu array[0]..
$harga = $values[0]["harga"];
$gambar = $values[0]["gambar"];
$ukuran = $values[0]["ukuran_objek"];
$id_warna_dominan = $values[0]["id_warna_dominan"];
$values2 = looping("SELECT * FROM warna_dominan WHERE id_warna_dominan = $id_warna_dominan");
$warna_dominan = $values2[0]["warna_dominan"];
$id_identitas = $values[0]["identitas"];
$values3 = looping("SELECT * FROM identitas WHERE id_identitas = $id_identitas");
$identitas = $values3[0]["penerima"];
$handphone = $values3[0]["handphone"];
$deskripsi = $values[0]["deskripsi"];
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
    <title>Pesanan</title>
  </head>

  <body>
    <nav class="nav" style="background-color: #0A564C;">
        <a class="text-light font-weight-bold font" style="text-decoration:none;" href="pesanan.php">
          Pesanan
        </a>
    </nav>
    <div class="ruang"></div>
    <div class="circle" style="height: 150px; width: 150px;">
      <a href="pesanan.php">
        <img src="foosel.jpg" alt="foosel" style="height: 150px; width: 150px;">
      </a>
    </div>
    <div class="form-row">
      <div class="artadminimg dataart">
        <img src="#?>" alt="<?=$nama?>" class="rounded" style="height: 300px; 
  width: 300px; ">
      </div>
      <div class="card" style="margin-top:100px; margin-left:5px; width: 960px; background-color: #0A564C;">
            <blockquote class="blockquote mb-0">
              <p style="font-family: Times New Roman; font-size:25px; text-align: center; font-weight: bold; text-transform: uppercase; color: #fff;"><?=$nama?></p>
                <div class="form-row" style="text-align: center;">
                  <div class="col-md-6 mb-3">
                    <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff; text-transform: capitalize;">Warna Dominan : <?=$warna_dominan?></p>
                  </div>
                </div>
                <div class="form-row" style="text-align: center;">
                  <div class="col-md-6 mb-3">
                    <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff;">Harga : <?=$harga?></p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff;">Ukuran Minimum : <?=$ukuran?></p>
                  </div>
                </div>
                <div class="form-row" style="text-align: center;">
                  <div class="col-md-6 mb-3">
                    <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff; text-transform: capitalize;">Penerima : <?=$identitas?></p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <p style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff; text-transform: capitalize;">Handphone : <?=$handphone?></p>
                  </div>
                </div>
            </blockquote>
        </div>
      </div>
    </div>
    <div class="card" style="margin-top:5px; margin-left:45px; width: 1265px; background-color: #0A564C;">
        <blockquote class="blockquote mb-0" style="font-family: Times New Roman; font-size:20px; font-weight: bold; color: #fff;">
                  <label>Deskripsi :</label>
                  <p><?=$deskripsi?></p>
        </blockquote>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>