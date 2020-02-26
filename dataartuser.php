<?php
require 'php.php';
require 'php1.php';
$data = $_GET["id_artt"];
$values = looping("SELECT * FROM objek_foosel_admin WHERE id = $data");
  //var_dump($values);
$id_jenis_art = $values[0]["id_jenis_art"];
$nama_art = $values[0]["nama"];//ditambah [0] karena yang diperiksa hanya 1 id yg terdeklarasi dan diinputkan pada 1 array yaitu array[0]..
$harga_art = $values[0]["harga"];
$gambar_art = $values[0]["gambar"];
$ukuran = $values[0]["ukuran_objek"];
$values1 = looping("SELECT * FROM jenis_art WHERE id_jenis_art = $id_jenis_art");
$jenis_art = $values1[0]["jenis_art"];
$warna_dominan = $values[0]["id_warna_dominan"];
$status_art = $values[0]["status"];
$deskripsi_art = $values[0]["deskripsi"];
$waktu = $values[0]["waktu"];
$lokasi_pernah = $values[0]["lokasi_pernah_diterapkan"];
$id_lokasi_rekomendasi = $values[0]["id_lokasi_rekomendasi"];
$values2 = looping("SELECT * FROM lokasi_rekomendasi WHERE id_lokasi_rekomendasi = $id_lokasi_rekomendasi");
$lokasi_rekomendasi = $values2[0]["lokasi_rekomendasi"];
$id_type_bangunan = $values[0]["id_type_bangunan"];
$values3 = looping("SELECT * FROM type_bangunan WHERE id_type_bangunan = $id_type_bangunan");
$type_bangunan = $values3[0]["type_bangunan"];
//var_dump($_POST);
if(isset($_POST["submit"])){
      if(artdatain($_POST) > 0 ){
        //var_dump($_POST);
          echo"
            <script>
              alert('data berhasil ditambahkan...')
            </script>
          ";
          header("Location: penerima_jasa.php ");
          //var_dump($_POST);
      }
      else{
          echo"
            <script>
              alert('data baru tidak berhasil ditambahkan...')
            </script>
        ";
      }
  }

$option_warna = looping("SELECT * FROM warna_dominan");
$option_lokasi = looping("SELECT * FROM lokasi_rekomendasi");
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
    <title>Art</title>
  </head>

  <body>
    <nav class="nav" style="background-color: #0A564C;">
        <a class="text-light font-weight-bold font" style="text-decoration:none;" href="art_user.php">
          Data Art
        </a>
    </nav>
    <div class="ruang"></div>
    <div class="circle logodata">
      <a href="art_user.php">
        <img src="foosel.jpg" alt="foosel" class="imgdata">
      </a>
    </div>
    <form action="#" method="post">
      <div class="form-group">
        <div class="form-row">
          <div class="artadminimg dataart">
            <img src="gambar_art/<?=$gambar_art?>" alt="<?=$nama_art?>" class="rounded" style="height: 300px; width: 100%; ">
          </div>
          <div class="card carddata shadow p-1 mb-1 bg-white rounded">
                <blockquote class="blockquote mb-0">
                  <p id="namedata"><?=$nama_art?></p>
                  <div class="form-row" style="text-align: center;">
                    <div class="col-md-6 mb-3">
                      <p class="datalain">Jenis Art : <?=$jenis_art?></p>
                    </div>
                    <div class="col-md-3 mb-3">
                      <p class="datalain">Warna Dominan:</p>
                    </div>
                    <div class="col-md-2 mb-3">
                      <select class="custom-select font2" name="warnadom">
                        <?php $a=1; 
                        is_null($b);
                        foreach($option_warna as $opwar) : ?>
                          <?php if($opwar['warna_dominan'] != $b) : ?>
                            <?php if($opwar['id_warna_dominan'] == $warna_dominan) : ?>
                              <option value="<?= $opwar['id_warna_dominan']; ?>" selected><?= $opwar['warna_dominan']; ?></option>
                            <?php elseif($opwar['id_warna_dominan'] != $warna_dominan) : ?>
                                <option value="<?= $opwar['id_warna_dominan']; ?>"><?= $opwar['warna_dominan']; ?></option>
                            <?php endif;?>
                          <?php endif;?>
                        <?php $a++; 
                        endforeach;?>
                      </select>
                      <small class="form-text text-muted font1">rubah warna..</small>
                    </div>
                  </div>
                  <div class="form-row" style="text-align: center;">
                    <div class="col-md-6 mb-3">
                      <p class="datalain">Harga Art : <?=$harga_art?></p>
                    </div>
                    <div class="col-md-3 mb-3">
                      <p class="datalain">Jumlah Art :</p>
                    </div> 
                    <div class="col-md-2 mb-3">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" onclick="kurang()"></button>
                            <input type="text" class="form-control" Id ="jumlah" aria-label="Text input with segmented dropdown button" name="outj" value="1">
                            <div class="btn-group dropup">
                              <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" onclick="tambah()"></button>
                            </div>
                        </div>
                        <small class="form-text text-muted font1">rubah jumlah..</small>
                    </div>
                  </div>
                  <div class="form-row" style="text-align: center;">
                    <div class="col-md-6 mb-3">
                      <p class="datalain">Waktu Selesai : <?=$waktu?></p>
                    </div>
                    <!--form type bangunan-->
                      <div class="col-md-3 mb-3">
                        <p class="datalain">Type bangunan :</p>
                      </div>
                      <div class="col-md-2 mb-3">
                        <select class="custom-select" name="type_bangunan" style="font-family: Times New Rowman; text-transform: capitalize;">
                        <?php is_null($b);
                          foreach($option_type_bangunan as $optyp_bang) : ?>
                            <?php if($optyp_bang['type_bangunan'] != $b) : ?>
                              <?php if($optyp_bang['id_type_bangunan'] == $type_bangunan ) : ?>
                                <option value="<?= $optyp_bang['id_type_bangunan']; ?>" selected><?= $optyp_bang['type_bangunan']; ?></option>
                              <?php elseif($optyp_bang['id_type_bangunan'] != $type_bangunan) : ?>
                                <option value="<?= $optyp_bang['id_type_bangunan']; ?>"><?= $optyp_bang['type_bangunan']; ?></option>
                              <?php endif;?>
                          <?php endif;?>
                          <?php endforeach;?>
                          </select>
                        <small class="form-text text-muted" style="font-family: Times New Rowman;">Masukan type_bangunan...</small>
                      </div>
                    <!--form type banguan-->
                  </div>
                  <div class="form-row" style="text-align: center;">
                    <div class="col-md-6 mb-3">
                     <p class="datalain">Ukuran Minimum : <?=$ukuran?></p>
                    </div>
                    <div class="col-md-3 mb-3">
                      <p class="datalain">Lokasi Rekomendasi:</p>
                    </div>
                    <div class="col-md-2 mb-3">
                      <select class="custom-select font2" name="lokasi_rekomendasi">
                        <?php is_null($b);
                        foreach($option_lokasi as $lokasi) : ?>
                          <?php if($lokasi['lokasi_rekomendasi'] != $b) : ?>
                            <?php if($lokasi['id_lokasi_rekomendasi'] == $id_lokasi_rekomendasi) : ?>
                              <option value="<?= $lokasi['id_lokasi_rekomendasi']; ?>" selected><?= $lokasi['lokasi_rekomendasi']; ?></option>
                            <?php elseif($lokasi['id_lokasi_rekomendasi'] != $id_lokasi_rekomendasi) : ?>
                                <option value="<?= $lokasi['id_lokasi_rekomendasi']; ?>"><?= $lokasi['lokasi_rekomendasi']; ?></option>
                            <?php endif;?>
                          <?php endif;?>
                        <?php $a++; 
                        endforeach;?>
                      </select>
                      <small class="form-text text-muted font1">rubah lokasi rekomendasi..</small>
                    </div>
                  </div>
                  <p id="ukurandata">Pernah Diterapkan : <?=$lokasi_pernah?></p>
              </blockquote>
          </div>
        </div>
        <div class="card shadow p-1 mb-1 bg-white rounded deskripsidata">
            <blockquote class="blockquote mb-0 styledeskripsi">
                <label>Deskripsi Art :</label>
                <p><?=$deskripsi_art?></p>
            </blockquote>
        </div>
      </div>
      <input type="hidden" name="gambar" value="<?=$gambar_art?>">
      <input type="hidden" name="nama" value="<?=$nama_art?>">
      <input type="hidden" name="jenis" value="<?=$id_jenis_art?>">
      <input type="hidden" name="harga" value="<?=$harga_art?>">
      <input type="hidden" name="ukuran" value="<?=$ukuran?>">
      <input type="hidden" name="deskripsi" value="<?=$deskripsi_art?>">
      <input type="hidden" name="waktu" value="<?=$waktu?>">
      <input type="hidden" name="pernah_terap" value="<?=$lokasi_pernah?>">
      <button type="submit" class="form-control size font btn buttondata" name="submit">Beli</button>
    </form>
    <script src="JavaScript.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>