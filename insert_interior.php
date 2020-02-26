<?php
require 'php.php';
  if(isset($_POST["submit"])){
      if(interiorin($_POST) > 0 ){
         echo"
            <script>
              alert('data berhasil ditambahkan...');
            </script>
          ";
          header("Location: interioradmin.php ");
      }
      else{
          echo"
            <script>
              alert('data baru belum berhasil ditambahkan...');
            </script>
        ";
      }
  }
  $option_warna_interior = looping("SELECT * FROM warna_dominan");
  $option_jenis_interior = looping("SELECT * FROM jenis_interior");
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
    <title>Insert</title>
  </head>


  <body>
    <!--Header Gambar-->
    <div class="ruang"></div>
    <div class="circle">
      <a href="interioradmin.php"><img src="foosel.jpg" alt="foosel" style="width: 250px; height: 250px;"></a>
    </div>
    <!--Header Gambar-->

    <!--Body Form-->
    <div class="ruang1"></div>
    <form class="groupserver" action="#" method="post" enctype="multipart/form-data">
    <!--form name-->
      <input type="text" class="form-control size1 font1" name="name" placeholder="Nama Interior">
      <small class="form-text text-muted font2">Masukan nama Interior..</small>
    <!--form name-->

      <div class="form-row">
    <!--form jenis-->
        <div class="col-md-6 mb-3">
          <select class="custom-select font2" name="jenisin">
            <?php $a=1; 
            is_null($b);
            foreach($option_jenis_interior as $opjen_inter) : ?>
              <?php if($opjen_inter['jenis_interior'] != $b) : ?>
                <option value="<?= $opjen_inter['id_jenis_interior']; ?>"><?= $opjen_inter['jenis_interior']; ?></option>
              <?php endif;?>
            <?php $a++; 
            endforeach;?>
          </select>
          <small class="form-text text-muted font2">Masukan jenis interior..</small>
        </div>
    <!--form jenis-->
    <!--form warna-->
        <div class="col-md-6 mb-3">
          <select class="custom-select font2" name="warnadom">
            <?php $a=1; 
            is_null($b);
            foreach($option_warna_interior as $opwar_inter) : ?>
              <?php if($opwar_inter['warna_dominan'] != $b) : ?>
                <option value="<?= $opwar_inter['id_warna_dominan']; ?>"><?= $opwar_inter['warna_dominan']; ?></option>
              <?php endif;?>
            <?php $a++; 
            endforeach;?>
          </select>
          <small class="form-text text-muted font2">Masukan warna dominan..</small>
        </div>
    <!--form warna--> 
      </div>  
    
      <div class="form-row">
    <!--form harga--> 
          <div class="col-md-6 mb-3">
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text font2">Rp</div>
              </div>
              <input type="text" class="form-control font2" name="harga" placeholder="Harga">
            </div>
            <small class="form-text text-muted font2">Masukan harga interior..</small>
          </div>
    <!--form harga-->
    <!--form gambar-->
          <div class="col-md-4 mb-3">
            <input type="file" class="form-control-file" name="gambar">
            <small class="form-text text-muted font2">Masukan gambar interior..</small>
          </div>
    <!--form gambar-->
      </div>

      <div class="form-row">
  <!--form rekomendasi-->
        <div class="col-md-6 mb-3">
          <select class="custom-select font2" name="rekomendasi">
            <?php $a=1; 
            is_null($b);
            foreach($option_lokasi_rekomendasi as $oplok_rekoart) : ?>
              <?php if($oplok_rekoart['lokasi_rekomendasi'] != $b) : ?>
                <option value="<?= $oplok_rekoart['id_lokasi_rekomendasi']; ?>"><?= $oplok_rekoart['lokasi_rekomendasi']; ?></option>
              <?php endif;?>
            <?php $a++; 
            endforeach;?>
          </select>
          <small class="form-text text-muted font2">Masukan lokasi rekomendasi..</small>
        </div>
  <!--form type bangunan-->
        <div class="col-md-6 mb-3">
          <select class="custom-select font2" name="type_bangunan">
          <?php $a=1; 
          is_null($b);
          foreach($option_type_bangunan as $optyp_bang) : ?>
            <?php if($optyp_bang['type_bangunan'] != $b) : ?>
              <option value="<?= $optyp_bang['id_type_bangunan']; ?>"><?= $optyp_bang['type_bangunan']; ?></option>
            <?php endif;?>
          <?php $a++; 
          endforeach;?>
          </select>
          <small class="form-text text-muted font2">Masukan type_bangunan...</small>
        </div>
  <!--form type banguan-->
      </div>

    <!---form parameter-->
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <input type="text" class="form-control size1 font2" name="ukuran" placeholder="ukuran">
          <small class="form-text text-muted font2">Masukan Ukuran Minimum..</small>
        </div>
        <div class="col-md-6 mb-3">
          <input type="text" class="form-control size1 font2" name="waktu" placeholder="waktu">
          <small class="form-text text-muted font2">Masukan waktu pengerjaan interior, satuan jam...</small>
        </div>
      </div>
    <!---form parameter-->
    <!--form lokasi-->
      <input type="text" class="form-control size1 font2" name="lokasi" placeholder="Lokasi">
      <small class="form-text text-muted font2">Masukan lokasi yang pernah di dsain dengan interior ini..</small>
    <!--form lokasi-->
    <!--form deskripsi-->
      <div class="mb-1000">
          <textarea class="form-control size font2" name="deskripsi" placeholder="Deskripsi"></textarea>
          <small class="form-text text-muted font2">Masukan deskripsi interior..</small>
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