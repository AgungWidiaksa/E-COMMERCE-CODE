<?php
require 'php.php';
require 'php1.php';
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
$warna_dominan = $values[0]["id_warna_dominan"];
$status_furniture = $values[0]["status"];
$deskripsi_furniture = $values[0]["deskripsi"];
//var_dump($_POST);
if(isset($_POST["submit"])){
      if(furnituredatain($_POST) > 0 ){
        //var_dump($_POST);
          echo"
            <script>
              alert('data berhasil ditambahkan...')
            </script>
          ";
          header("Location: penerima.php ");
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
        <a class="text-light font-weight-bold font" style="text-decoration:none;" href="index.php">
          Data Furniture
        </a>
    </nav>
    <div class="ruang"></div>
    <div class="circle logodata">
      <a href="index.php">
        <img src="foosel.jpg" alt="foosel" class="imgdata">
      </a>
    </div>
    <form action="#" method="post">
      <div class="form-group">
        <div class="form-row">
          <div class="artadminimg dataart">
            <img src="gambar_furniture/<?=$gambar_furniture?>" alt="<?=$nama_furniture?>" class="rounded" style="height: 300px; width: 100%; ">
          </div>
          <div class="card carddata shadow p-1 mb-1 bg-white rounded">
                <blockquote class="blockquote mb-0">
                  <p id="namedata"><?=$nama_furniture?></p>
                  <div class="form-row" style="text-align: center;">
                    <div class="col-md-6 mb-3">
                      <p class="datalain">Jenis Furniture : <?=$jenis_furniture?></p>
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
                      <p class="datalain">Harga Furniture : <?=$harga_furniture?></p>
                    </div>
                    <div class="col-md-3 mb-3">
                      <p class="datalain">Jumlah Furniture :</p>
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
                      <p class="datalain">Status : <?=$status_furniture?></p>
                    </div>
                    <div class="col-md-6 mb-3">
                     <p class="datalain">Ukuran Minimum : <?=$ukuran?></p>
                    </div>
                  </div>
                </blockquote>
          </div>
        </div>
        <div class="card shadow p-1 mb-1 bg-white rounded deskripsidata">
            <blockquote class="blockquote mb-0 styledeskripsi">
                <label>Deskripsi Furniture :</label>
                <p><?=$deskripsi_furniture?></p>
            </blockquote>
        </div>
      </div>
      <input type="hidden" name="gambar" value="<?=$gambar_furniture?>">
      <input type="hidden" name="nama" value="<?=$nama_furniture?>">
      <input type="hidden" name="jenis" value="<?=$id_jenis_furniture?>">
      <input type="hidden" name="harga" value="<?=$harga_furniture?>">
      <input type="hidden" name="ukuran" value="<?=$ukuran?>">
      <input type="hidden" name="deskripsi" value="<?=$deskripsi_furniture?>">
      <input type="hidden" name="status" value="<?=$status_furniture?>">
      <button type="submit" class="form-control size font btn buttondata" name="submit">Beli</button>
    </form>
    <script src="JavaScript.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>