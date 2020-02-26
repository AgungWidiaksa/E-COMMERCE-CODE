<?php
require 'php.php';
  if(isset($_POST["submit"])){
      if(artin($_POST) > 0 ){
         echo"
            <script>
              alert('data berhasil ditambahkan...');
            </script>
          ";
          header("Location: artadmin.php ");
      }
      else{
          echo"
            <script>
              alert('data baru belum berhasil ditambahkan...');
            </script>
        ";
      }
  }
  $option_warna_art = looping("SELECT * FROM warna_dominan");
  $option_jenis_art = looping("SELECT * FROM jenis_art");
  $option_lokasi_rekomendasi = looping("SELECT * FROM lokasi_rekomendasi");
  $option_type_bangunan = looping("SELECT * FROM type_bangunan");
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
    <title>Registrasi</title>
  </head>

  <body>
  <!--Header Gambar-->
    <div class="ruang"></div>
    <div class="circle">
      <a href="artadmin.php"><img src="foosel.jpg" alt="foosel" style="width: 250px; height: 250px;"></a>
    </div>
  <!--Header Gambar-->

  <!--Body Form-->
    <div class="ruang1"></div>
    <form class="groupserver" action="#" method="post" enctype="multipart/form-data">
  <!--form name-->
      <input type="text" class="form-control size1" name="name" placeholder="Nama Art" style="font-family: Times New Rowman;">
      <small class="form-text text-muted" style="font-family: Times New Rowman;">Masukan Nama Art..</small>
  <!--form name-->

      <div class="form-row">
  <!--form jenis-->
        <div class="col-md-6 mb-3">
          <select class="custom-select" name="jenisin" style="text-transform: capitalize; font-family: Times New Rowman;">
            <?php $a=1; 
            is_null($b);         
            foreach($option_jenis_art as $opjen_art) : ?>
              <?php if($opjen_art['jenis_art'] != $b) : ?>
                <option value="<?= $opjen_art['id_jenis_art']; ?>"><?= $opjen_art['jenis_art']; ?></option>
              <?php endif;?>
            <?php $a++; 
            endforeach;?>
          </select>
          <small class="form-text text-muted" style="font-family: Times New Rowman;">Masukan Jenis Art..</small>
        </div>
  <!--form jenis-->
  <!--form warna-->
        <div class="col-md-6 mb-3">
          <select class="custom-select" name="warnadom" style="text-transform: capitalize; font-family: Times New Rowman">
            <?php $a=1; 
            is_null($b);
            foreach($option_warna_art as $opwar_art) : ?>
              <?php if($opwar_art['warna_dominan'] != $b) : ?>
                <option value="<?= $opwar_art['id_warna_dominan']; ?>"><?= $opwar_art['warna_dominan']; ?></option>
              <?php endif;?>
            <?php $a++; 
            endforeach;?>
          </select>
          <small class="form-text text-muted" style="font-family: Times New Rowman;">Masukan Warna Dominan..</small>
        </div>
  <!--form warna-->
      </div>      

      <div class="form-row">
  <!--form harga--> 
          <div class="col-md-6 mb-3">
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text" style="font-family: Times New Rowman;">Rp</div>
              </div>
              <input type="text" class="form-control" name="harga" placeholder="Harga" style="font-family: Times New Rowman;">
            </div>
            <small class="form-text text-muted" style="font-family: Times New Rowman;">Masukan Harga Art..</small>
          </div>
  <!--form harga--> 
  <!--form gambar-->
          <div class="col-md-4 mb-3">
            <input type="file" class="form-control-file" name="gambar">
            <small class="form-text text-muted" style="font-family: Times New Rowman;">Masukan Gambar Art..</small>
          </div>
  <!--form gambar-->
      </div>
  
      <div class="form-row">
  <!--form rekomendasi-->
        <div class="col-md-6 mb-3">
          <select class="custom-select" name="rekomendasi" style="text-transform: capitalize; font-family: Times New Rowman;">
            <?php $a=1; 
            is_null($b);
            foreach($option_lokasi_rekomendasi as $oplok_rekoart) : ?>
              <?php if($oplok_rekoart['lokasi_rekomendasi'] != $b) : ?>
                <option value="<?= $oplok_rekoart['id_lokasi_rekomendasi']; ?>"><?= $oplok_rekoart['lokasi_rekomendasi']; ?></option>
              <?php endif;?>
            <?php $a++; 
            endforeach;?>
          </select>
          <small class="form-text text-muted" style="font-family: Times New Rowman; font-family: Times New Rowman;">Masukan Gokasi Rekomendasi..</small>
        </div>
  <!--form type bangunan-->
        <div class="col-md-6 mb-3">
          <select class="custom-select" name="type_bangunan" style="text-transform: capitalize; font-family: Times New Rowman;">
          <?php $a=1; 
          is_null($b);
          foreach($option_type_bangunan as $optyp_bang) : ?>
            <?php if($optyp_bang['type_bangunan'] != $b) : ?>
              <option value="<?= $optyp_bang['id_type_bangunan']; ?>"><?= $optyp_bang['type_bangunan']; ?></option>
            <?php endif;?>
          <?php $a++; 
          endforeach;?>
          </select>
          <small class="form-text text-muted" style="font-family: Times New Rowman;">Masukan Type_Bangunan...</small>
        </div>
  <!--form type banguan-->
      </div>
  <!---form parameter-->
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <input type="text" class="form-control size1" name="ukuran" placeholder="Ukuran" style="font-family: Times New Rowman;">
          <small class="form-text text-muted" style="font-family: Times New Rowman;">Masukan Ukuran Minimum..</small>
        </div>
        <div class="col-md-6 mb-3">
          <input type="text" class="form-control size1" name="waktu" placeholder="Waktu" style="font-family: Times New Rowman;">
          <small class="form-text text-muted" style="font-family: Times New Rowman;">Masukan Waktu Pengerjaan Art, Satuan Jam...</small>
        </div>
      </div>
  <!---form parameter--> 
  <!--lokasi_pernah_dsain---->
        <input type="text" class="form-control size1" name="lokasi" placeholder="Lokasi" style="font-family: Times New Rowman;">
        <small class="form-text text-muted" style="font-family: Times New Rowman;">Masukan Lokasi Yang Pernah Di Dsain Dengan Art Ini..</small>
  <!--lokasi_pernah_dsain----
  <!--form deskripsi-->
      <div class="mb-1000">
          <textarea class="form-control size" name="deskripsi" placeholder="Deskripsi" style="font-family: Times New Rowman;"></textarea>
          <small class="form-text text-muted" style="font-family: Times New Rowman;">Masukan Deskripsi Art..</small>
      </div>
  <!--form deskripsi-->
  <!--form submit-->
      <button type="submit" name="submit" class="form-control size font" style="background-color: #0A564C; color:#fff;">Submit</button>
  <!--form submit-->
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>