<?php
require 'php.php';
//var_dump($_POST);
  if(isset($_POST["submit"])){
      if(furniturein($_POST) > 0 ){
         echo"
            <script>
              alert('data berhasil ditambahkan...');
            </script>
          ";
          header("Location: furnitureadmin.php ");
      }
      else{
          echo"
            <script>
              alert('data baru tidak berhasil ditambahkan...');
            </script>
        ";
      }
  }
   $option_warna_furniture = looping("SELECT * FROM warna_dominan");
   $option_jenis_furniture = looping("SELECT * FROM jenis_furniture");
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
      <a href="furnitureadmin.php"><img src="foosel.jpg" alt="foosel" style="width: 250px; height: 250px;"></a>
    </div>
  <!--Header Gambar-->

  <!--Body Form-->
    <div class="ruang1"></div>
    <form class="groupserver" action="#" method="post" enctype="multipart/form-data">
  <!--form name-->
      <input type="text" class="form-control size1 font1" name="name" placeholder="Nama Furniture">
      <small class="form-text text-muted font1">Masukan nama Furniture..</small>
  <!--form name-->

      <div class="form-row">
  <!--form jenis-->
        <div class="col-md-6 mb-3">
          <select class="custom-select font2" name="jenisin">
            <?php $a=1; 
            is_null($b);
            foreach($option_jenis_furniture as $opjen_furni) : ?>
              <?php if($opjen_furni['jenis_furniture'] != $b) : ?>
                <option value="<?= $opjen_furni['id_jenis_furniture']; ?>"><?= $opjen_furni['jenis_furniture']; ?></option>
              <?php endif;?>
            <?php $a++; 
            endforeach;?>
          </select>
          <small class="form-text text-muted font1">Masukan jenis furniture..</small>
        </div>
  <!--form jenis-->
  <!--form warna-->
        <div class="col-md-6 mb-3">
          <select class="custom-select font2" name="warnadom">
            <?php $a=1; 
            is_null($b);
            foreach($option_warna_furniture as $opwar_furni) : ?>
              <?php if($opwar_furni['warna_dominan'] != $b) : ?>
                <option value="<?= $opwar_furni['id_warna_dominan']; ?>"><?= $opwar_furni['warna_dominan']; ?></option>
              <?php endif;?>
            <?php $a++; 
            endforeach;?>
          </select>
          <small class="form-text text-muted font1">Masukan warna dominan..</small>
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
              <input type="text" class="form-control font1" name="harga" placeholder="Harga">
            </div>
            <small class="form-text text-muted font1">Masukan harga furniture..</small>
          </div>
  <!--form harga-->
  <!--form status--> 
          <div class="col-md-6 mb-3">
            <select class="custom-select font2" name="status">
            <option value="habis" selected>Habis</option>
            <option value="tersedia">Tersedia</option>
            </select>
            <small class="form-text text-muted font1">Masukan status ketersediaan furniture..</small>
          </div>
  <!--form status-->
      </div>
  <!---form parameter-->
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <input type="text" class="form-control size1 font2" name="ukuran" placeholder="ukuran">
          <small class="form-text text-muted font1">Masukan Ukuran Minimum..</small>
        </div>
        <!--form gambar-->
        <div class="col-md-6 mb-3">
          <input type="file" class="form-control-file" name="gambar">
          <small class="form-text text-muted font1">Masukan gambar furniture..</small>
        </div>
      <!--form gambar-->   
      </div>
  <!---form parameter-->
  <!--form deskripsi-->
      <div class="mb-1000">
          <textarea class="form-control size font1" name="deskripsi" placeholder="Deskripsi"></textarea>
          <small class="form-text text-muted font1">Masukan deskripsi furniture..</small>
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