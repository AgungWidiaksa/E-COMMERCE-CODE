<?php
require 'php.php';
if(isset($_POST["submit"])){
    if(user($_POST)>0){
      echo"
            <script>
              alert('data berhasil dicari...');
            </script
          ";
    }
    else{
      echo"
            <script>
              alert('data tidak berhasil dicari...');
            </script>
        ";
    }
  }
    if(isset($_POST["submitart"])){
      if(setart($_POST) > 0 ){
          echo"
            <script>
              alert('data baru berhasil ditambahkan...');
            </script>
          ";
      }
      else{
        echo"
        <script>
            alert('data tidak berhasil ditambahkan...');
        </script>
      ";
      }
    }   

    elseif(isset($_POST["submitfurniture"])){
      if(setfurniture($_POST) > 0 ){
           echo"
            <script>
              alert('data baru berhasil ditambahkan...');
            </script>
            ";
            // header("Location: index.php ");
      }
      else{
          echo"
            <script>
              alert('data tidak berhasil ditambahkan...');
            </script>
          ";
      }
    }

    elseif(isset($_POST["submitinterior"])){
      if(setinterior($_POST) > 0 ){
         echo"
            <script>
              alert('data baru berhasil ditambahkan...');
            </script>
          ";
      }
      else{
          echo"
            <script>
              alert('data tidak berhasil ditambahkan...');
            </script>
        ";
      }
    }
  //SET AFI
  //SET Kelengkapan Transaksi
  elseif(isset($_POST["submitpengirim"])){
      if(setpengirim($_POST) > 0 ){
         echo"
            <script>
              alert('data baru berhasil ditambahkan...');
            </script
          ";
      }
      else{
          echo"
            <script>
              alert('data tidak berhasil ditambahkan...');
            </script>
        ";
      }
  }
  elseif(isset($_POST["submitpos"])){
      if(setpos($_POST) > 0 ){
         echo"
            <script>
              alert('data baru berhasil ditambahkan...');
            </script
          ";
      }
      else{
          echo"
            <script>
              alert('data tidak berhasil ditambahkan...');
            </script>
        ";
      }
  }
  elseif(isset($_POST["submitpembayaran"])){
      if(setpembayaran($_POST) > 0 ){
         echo"
            <script>
              alert('data baru berhasil ditambahkan...');
            </script
          ";
      }
      else{
          echo"
            <script>
              alert('data tidak berhasil ditambahkan...');
            </script>
        ";
      }
  }
  //SET Kelengkapan Transaksi
  //SET Kelengkapan Penjualan
  elseif(isset($_POST["submitlokasirekom"])){
      if(setlokasirekom($_POST) > 0 ){
         echo"
            <script>
              alert('data baru berhasil ditambahkan...');
            </script
          ";
      }
      else{
          echo"
            <script>
              alert('data tidak berhasil ditambahkan...');
            </script>
        ";
      }
  }
  elseif(isset($_POST["submittypebangun"])){
      if(setbangunan($_POST) > 0 ){
         echo"
            <script>
              alert('data baru berhasil ditambahkan...');
            </script
          ";
      }
      else{
          echo"
            <script>
              alert('data tidak berhasil ditambahkan...');
            </script>
        ";
      }
  }
  elseif(isset($_POST["submitwar"])){
      if(setwarna($_POST) > 0 ){
         echo"
            <script>
              alert('data baru berhasil ditambahkan...');
            </script
          ";
      }
      else{
          echo"
            <script>
              alert('data tidak berhasil ditambahkan...');
            </script>
        ";
      }
  }
  //SET Kelengkapan Penjualan*/

  //DEL AFI*/
  if(isset($_POST["deleteart"])){
      if(deleteart($_POST) > 0 ){
          echo"
            <script>
              alert('data berhasil dihapus...');
            </script>
          ";
      }
      else{
        echo"
        <script>
            alert('data tidak berhasil dihapus...');
        </script>
      ";
      }
    }

    if(isset($_POST["deletefurniture"])){
      if(deletefurniture($_POST) > 0 ){
          echo"
            <script>
              alert('data berhasil dihapus...');
            </script>
          ";
      }
      else{
        echo"
        <script>
            alert('data tidak berhasil dihapus...');
        </script>
      ";
      }
    }

    if(isset($_POST["deleteinterior"])){
      if(deleteinterior($_POST) > 0 ){
          echo"
            <script>
              alert('data berhasil dihapus...');
            </script>
          ";
      }
      else{
        echo"
        <script>
            alert('data tidak berhasil dihapus...');
        </script>
      ";
      }
    }
    //DEL AFI*/
    //DEL Kelengkapan Transaksi
    if(isset($_POST["deletepengirim"])){
      if(deletepengirim($_POST) > 0 ){
          echo"
            <script>
              alert('data berhasil dihapus...');
            </script>
          ";
      }
      else{
        echo"
        <script>
            alert('data tidak berhasil dihapus...');
        </script>
      ";
      }
    }

    if(isset($_POST["deletepos"])){
      if(deletepos($_POST) > 0 ){
          echo"
            <script>
              alert('data berhasil dihapus...');
            </script>
          ";
      }
      else{
        echo"
        <script>
            alert('data tidak berhasil dihapus...');
        </script>
      ";
      }
    }

    if(isset($_POST["deletepembayaran"])){
      if(deletepembayaran($_POST) > 0 ){
          echo"
            <script>
              alert('data berhasil dihapus...');
            </script>
          ";
      }
      else{
        echo"
        <script>
            alert('data tidak berhasil dihapus...');
        </script>
      ";
      }
    }
    //DEL Kelengkapan Transaksi
    //DEL Kelengkapan Penjualan
      if(isset($_POST["deletelokasirekom"])){
      if(deletelokasirekom($_POST) > 0 ){
          echo"
            <script>
              alert('data berhasil dihapus...');
            </script>
          ";
      }
      else{
        echo"
        <script>
            alert('data tidak berhasil dihapus...');
        </script>
      ";
      }
    }

    if(isset($_POST["deletetypebangun"])){
      if(deletetypebangun($_POST) > 0 ){
          echo"
            <script>
              alert('data berhasil dihapus...');
            </script>
          ";
      }
      else{
        echo"
        <script>
            alert('data tidak berhasil dihapus...');
        </script>
      ";
      }
    }

    if(isset($_POST["deletewar"])){
      if(deletewar($_POST) > 0 ){
          echo"
            <script>
              alert('data berhasil dihapus...');
            </script>
          ";
      }
      else{
        echo"
        <script>
            alert('data tidak berhasil dihapus...');
        </script>
      ";
      }
    }
    //DEL Kelengkapan Penjualan*/
  $query = looping("SELECT * FROM objek_foosel_admin where objek ='art' and user_akses ='admin'");
  $query1 = looping("SELECT * FROM objek_foosel_admin where objek ='furniture' and user_akses ='admin'");
  $query2 = looping("SELECT * FROM objek_foosel_admin where objek ='interior' and user_akses ='admin'");
  $option_jenis_art = looping("SELECT * FROM jenis_art");
  $option_jenis_furniture = looping("SELECT * FROM jenis_furniture");
  $option_jenis_interior = looping("SELECT * FROM jenis_interior");
  $jenis_pengirim = looping("SELECT * FROM jenis_pengirim");
  $kode_pos = looping("SELECT * FROM kode_pos");
  $media_pembayaran = looping("SELECT * FROM media_pembayaran");
  $option_lokasi_rekomendasi = looping("SELECT * FROM lokasi_rekomendasi");
  $option_type_bangunan = looping("SELECT * FROM type_bangunan");
  $option_warna = looping("SELECT * FROM warna_dominan");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>FOOSEL</title>
  </head>


  <body>
    <!--Header-->
    <div class="basic">
    <!--Header-->
    <!--Header Top-->
    <div>
      <nav class="navbar bg-success navbar-fixed-top">
         <a href="index.php">
            <img src="foosel1.png" style="position:relative; width: 70px; height: 70px; left: 50px; top:5px;"class="d-inline-block align-top" alt="">
          </a>
        <form class="form-inline">
          <div class="input-group">
            <input class="form-control" type="search" aria-label="Search" aria-describedby="button-addon2">
            <div class="input-group-append" style="font-family: Times New Roman;">
              <button class="btn btn-outline-light font-weight-bold" type="button" id="button-addon2">Search</button>
            </div>
          </div>
        </form>
        <ul class="nav space">
          <li class="nav-item" >
            <a class="nav-link btn btn-outline-light mr-2 font-weight-bold" href="#" data-toggle="modal" data-target="#login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light font-weight-bold" href="registrasi2.php">Registrasi</a>
          </li>
        </ul>
        <div class="modal" tabindex="-1" role="dialog" id="login">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header btn btn-success">
                  <h5 class="modal-title" style="font-family: Times New Roman; font-weight: bold;">LOGIN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="#" method="POST">
                  <div class="modal-body">
                    <input type="text" class="form-control size1" name="user" placeholder="Username">
                    <small class="form-text text-muted">Masukan username anda..</small>
                    <input type="password" class="form-control size1" name="pass" placeholder="Password">
                    <small class="form-text text-muted">Masukan password anda..</small>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-success" style="font-family: Times New Roman;">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-family: Times New Roman;">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </nav>
    <!--Header Top-->
    <!--Header Buttom-->
     <nav class="nav justify-content-between nav-tabs" style="background-color: #0A564C">
      <!--Text FOOSEL-->
        <a class="text-light font-weight-bold navbar-brand" style="font-family: Times New Roman; font-size:20px;" href="index.php">
          Art.Furniture.Interior
        </a>
      <!--Text FOOSEL-->
      <!--Set FOOSEL-->
        <a class="nav-link dropdown-toggle text-light font-weight-bold" style="font-family: Times New Roman;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting</a>
          <!--SET AFI-->
          <div class="dropdown-menu ">
            <a class="dropdown-item btn-success" data-toggle="modal" data-target="#setart" style="font-family: Times New Roman; font-weight: bold;">Set Jenis Art</a>
            <a class="dropdown-item btn-success" data-toggle="modal" data-target="#setfurniture" style="font-family: Times New Roman; font-weight: bold;">Set Jenis Furniture</a>
            <a class="dropdown-item btn-success" data-toggle="modal" data-target="#setinterior" style="font-family: Times New Roman; font-weight: bold;">Set Jenis Interior</a>
          <!--SET AFI-->
            <div class="dropdown-divider"></div>
          <!--SET Kelengkapan Transaksi-->
            <a class="dropdown-item btn-success" data-toggle="modal" data-target="#setpengirim" style="font-family: Times New Roman; font-weight: bold;">Set Jenis Pengirim</a>
            <a class="dropdown-item btn-success" data-toggle="modal" data-target="#setpos" style="font-family: Times New Roman; font-weight: bold;">Set Kode Pos</a>
            <a class="dropdown-item btn-success" data-toggle="modal" data-target="#setpembayaran" style="font-family: Times New Roman; font-weight: bold;">Set Media Pembayaran</a>
          <!--SET Kelengkapan Transaksi-->
            <div class="dropdown-divider"></div>
          <!--SET Kelengkapan Penjualan-->
          <a class="dropdown-item btn-success" data-toggle="modal" data-target="#setlokasirekom" style="font-family: Times New Roman; font-weight: bold;">Set Lokasi Rekomendasi</a>
          <a class="dropdown-item btn-success" data-toggle="modal" data-target="#setbangunan" style="font-family: Times New Roman; font-weight: bold;">Set Type Bangunan</a>
          <a class="dropdown-item btn-success" data-toggle="modal" data-target="#setwarna" style="font-family: Times New Roman; font-weight: bold;">Set Warna</a>
          </div>
          <!--SET Kelengkapan Penjualan-->
      </nav>

      <!--SET AFI-->
        <!--artset-->
        <div class="modal" tabindex="-1" role="dialog" id="setart">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header btn btn-success">
                  <h5 class="modal-title" style="font-family: Times New Roman; font-weight: bold;">TAMBAHKAN JENIS ART</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="#" method="POST">
                  <div class="modal-body">
                      <select class="custom-select font2">
                        <?php  
                        is_null($b);
                          foreach($option_jenis_art as $opjen_art) : ?>
                            <?php if($opjen_art['jenis_art'] != $b) : ?>
                              <option><?= $opjen_art['jenis_art']; ?></option>
                              <?php $art = $opjen_art['jenis_art']; ?>
                            <?php endif;?>
                        <?php endforeach;?>
                      </select>
                      <small class="form-text text-muted font2"> Jenis Art..</small>
                      <input type="text" class="form-control size1" name="setart" value="<?=$art?>">
                      <small class="form-text text-muted font2">Masukan Jenis Art..</small>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal" style="font-family: Times New Roman;">Close</button>
                    <button type="submit" class="btn btn-danger" name="deleteart" style="font-family:Times New Roman;" onclick="return confirm('Data ini yakin dihapus.?');">Delete</button>
                    <button type="submit" class="btn btn-success" name="submitart" style="font-family: Times New Roman;">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--artset-->

         <!--furnitureset-->
        <div class="modal" tabindex="-1" role="dialog" id="setfurniture">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header btn btn-success">
                  <h5 class="modal-title" style="font-family: Times New Roman; font-weight: bold;">TAMBAHKAN JENIS FURNITURE</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="#" method="POST">
                <div class="modal-body">
                  <select class="custom-select font2">
                    <?php is_null($b);
                      foreach($option_jenis_furniture as $opjen_furni) : ?>
                        <?php if($opjen_furni['jenis_furniture'] != $b) : ?>
                            <option><?= $opjen_furni['jenis_furniture']; ?></option>
                        <?php endif;?>
                        <?php $furnit = $opjen_furni['jenis_furniture']; ?>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-muted font2">Jenis Furniture..</small>
                  <input type="text" class="form-control size1" name="setfurniture" value="<?= $furnit ?>">
                  <small class="form-text text-muted font2">Masukan Jenis Furniture..</small>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal" style="font-family: Times New Roman;">Close</button>
                  <button type="submit" class="btn btn-danger" name="deletefurniture" style="font-family:Times New Roman;" onclick="return confirm('Data ini yakin dihapus.?');">Delete</button>
                  <button type="submit" name="submitfurniture" class="btn btn-success" style="font-family: Times New Roman;">Add</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--furnitureset-->

        <!--interiorset-->
        <div class="modal" tabindex="-1" role="dialog" id="setinterior">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header btn btn-success">
                  <h5 class="modal-title" style="font-family: Times New Roman; font-weight: bold;">TAMBAHKAN JENIS INTERIOR</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="#" method="POST">
                <div class="modal-body">
                  <select class="custom-select font2">
                    <?php is_null($b);
                    foreach($option_jenis_interior as $opjen_inter) : ?>
                      <?php if($opjen_inter['jenis_interior'] != $b) : ?>
                          <option><?= $opjen_inter['jenis_interior']; ?></option>
                      <?php endif;?>
                      <?php $inter = $opjen_inter['jenis_interior']; ?>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-muted font2">Jenis Interior..</small>
                  <input type="text" class="form-control size1" name="setinterior" value="<?= $inter ?>">
                  <small class="form-text text-muted font2">Masukan Jenis Interior..</small>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal" style="font-family: Times New Roman;">Close</button>
                  <button type="submit" class="btn btn-danger" name="deleteinterior" style="font-family:Times New Roman;" onclick="return confirm('Data ini yakin dihapus.?');">Delete</button>
                  <button type="submit" name="submitinterior" class="btn btn-success" style="font-family: Times New Roman;">Add</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--interiorset-->
    <!--SET AFI-->
    <!--SET Kelengkapan Transaksi-->
        <div class="modal" tabindex="-1" role="dialog" id="setpengirim">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header btn btn-success">
                  <h5 class="modal-title" style="font-family: Times New Roman; font-weight: bold;">TAMBAHKAN JENIS PENGIRIM</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="#" method="POST">
                <div class="modal-body">
                  <select class="custom-select font2">
                    <?php is_null($b); 
                    foreach($jenis_pengirim as $pengiriman) : ?>
                      <?php if($pengiriman['jenis_pengirim'] != $b) : ?>
                        <option><?= $pengiriman['jenis_pengirim']?></option>
                        <?php $kirim = $pengiriman['jenis_pengirim']; ?>
                      <?php endif;?>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-muted font2">Media Pengiriman..</small>
                  <input type="text" class="form-control size1" name="setpengirim" value="<?= $kirim ?>">
                  <small class="form-text text-muted font2">Jenis Pengirim..</small>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal" style="font-family: Times New Roman;">Close</button>
                  <button type="submit" class="btn btn-danger" name="deletepengirim" style="font-family:Times New Roman;" onclick="return confirm('Data ini yakin dihapus.?');">Delete</button>
                  <button type="submit" name="submitpengirim"  class="btn btn-success" style="font-family: Times New Roman;">Add</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="setpos">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header btn btn-success">
                  <h5 class="modal-title" style="font-family: Times New Roman; font-weight: bold;">TAMBAHKAN KODE POS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="#" method="POST" onsubmit="return validasi_input(this)">
                  <div class="modal-body">  
                  <select class="custom-select font2">
                      <?php foreach($kode_pos as $pos) : ?>
                        <?php if($pos['kode_pos'] != 0) : ?>
                            <option><?= $pos['kode_pos'],' , ',$pos['prov'],' , ',$pos['kab'],' , ',$pos['kec']; ?></option>
                        <?php endif;?>
                        <?php $kpos = $pos['kode_pos']; ?>
                        <?php $vpos = $pos['prov']; ?>
                        <?php $bpos = $pos['kab']; ?>
                        <?php $cpos = $pos['kec']; ?>
                      <?php endforeach;?>
                  </select>
                  <small class="form-text text-muted font2">Daerah dan Kode pos..</small>
                  <input type="text" class="form-control size1" name="setpos" value="<?= $kpos ?>">
                  <small class="form-text text-muted font2">Masukan Kode Pos..</small>
                  <input type="text" class="form-control size1" name="setprov" value="<?= $vpos ?>">
                  <small class="form-text text-muted font2">Masukan Provinsi..</small>
                  <input type="text" class="form-control size1" name="setkab" value="<?= $bpos ?>">
                  <small class="form-text text-muted font2">Masukan Kabupaten..</small>
                  <input type="text" class="form-control size1" name="setkec" value="<?= $cpos ?>">
                  <small class="form-text text-muted font2">Masukan Kecamatan..</small>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal" style="font-family: Times New Roman;">Close</button>
                  <button type="submit" class="btn btn-danger" name="deletepos" style="font-family:Times New Roman;" onclick="return confirm('Data ini yakin dihapus.?')">Delete</button>
                  <button type="submit" name="submitpos" class="btn btn-success" style="font-family: Times New Roman;">Add</button>
                </div>
                </form>
                <script type="text/javascript">
                  function validasi_input(form){
                    if (form.setpos.value == ""){
                      alert("Kode Pos masih kosong!");
                      form.setpos.focus();
                      return (false);
                    }
                  return (true);
                  }
                </script>
              </div>
            </div>
          </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="setpembayaran">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header btn btn-success">
                  <h5 class="modal-title" style="font-family: Times New Roman; font-weight: bold;">TAMBAHKAN KODE METODE PEMBAYARAN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="#" method="POST">
                <div class="modal-body">
                  <select class="custom-select font2">
                    <?php is_null($b); foreach($media_pembayaran as $pembayaran) : ?>
                      <?php if($pembayaran['pembayaran'] != $b) : ?>
                        <option><?= $pembayaran['pembayaran']?></option>
                      <?php endif;?>
                      <?php $pem = $pembayaran['pembayaran']; ?>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-muted font2">Media Pembayaran..</small>  
                  <input type="text" class="form-control size1" name="setpembayaran" value="<?= $pem ?>">
                  <small class="form-text text-muted font2">Masukan Media Pembayaran..</small>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal" style="font-family: Times New Roman;">Close</button>
                  <button type="submit" class="btn btn-danger" name="deletepembayaran" style="font-family:Times New Roman;" onclick="return confirm('Data ini yakin dihapus.?')">Delete</button>
                  <button type="submit" name="submitpembayaran" class="btn btn-success" style="font-family: Times New Roman;">Add</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    <!--SET SET Kelengkapan Transaksi-->
    <!--SET Kelengkapan Penjualan-->
     <div class="modal" tabindex="-1" role="dialog" id="setlokasirekom">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header btn btn-success">
                  <h5 class="modal-title" style="font-family: Times New Roman; font-weight: bold;">TAMBAHKAN LOKASI REKOMENDASI</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="#" method="POST">
                <div class="modal-body">
                  <select class="custom-select font2">
                     <?php is_null($b);
                      foreach($option_lokasi_rekomendasi as $oplok_rekoart) : ?>
                        <?php if($oplok_rekoart['lokasi_rekomendasi'] != $b) : ?>
                            <option value="<?= $oplok_rekoart['id_lokasi_rekomendasi']; ?>"><?= $oplok_rekoart['lokasi_rekomendasi']; ?></option>
                            <?php $lokasi = $oplok_rekoart['lokasi_rekomendasi']; ?>
                        <?php endif;?>
                      <?php endforeach;?>
                  </select>
                  <small class="form-text text-muted font2">Lokasi Rekomendasi..</small>
                  <input type="text" class="form-control size1" name="setlokasirekom" value="<?= $lokasi ?>">
                  <small class="form-text text-muted font2">Masukan Lokasi Rekomendasi..</small>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal" style="font-family: Times New Roman;">Close</button>
                  <button type="submit" class="btn btn-danger" name="deletelokasirekom" style="font-family:Times New Roman;" onclick="return confirm('Data ini yakin dihapus.?')">Delete</button>
                  <button type="submit" name="submitlokasirekom" class="btn btn-success" style="font-family: Times New Roman;">Add</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="setbangunan">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header btn btn-success">
                  <h5 class="modal-title" style="font-family: Times New Roman; font-weight: bold;">TAMBAHKAN TYPE BANGUNAN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="#" method="POST">
                <div class="modal-body">
                  <select class="custom-select font2">
                  <?php is_null($b);
                  foreach($option_type_bangunan as $optyp_bang) : ?>
                    <?php if($optyp_bang['type_bangunan'] != $b) : ?>
                        <option><?= $optyp_bang['type_bangunan']; ?></option>
                        <?php $bangunan = $optyp_bang['type_bangunan']; ?>
                    <?php endif;?>
                  <?php endforeach;?>
                  </select>
                  <small class="form-text text-muted font2">Type_Bangunan...</small>
                  <input type="text" class="form-control size1" name="setbangunan" value="<?= $bangunan ?>">
                  <small class="form-text text-muted font2">Masukan Type Bangunan..</small>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal" style="font-family: Times New Roman;">Close</button>
                  <button type="submit" class="btn btn-danger" name="deletetypebangun" style="font-family:Times New Roman;" onclick="return confirm('Data ini yakin dihapus.?')">Delete</button>
                  <button type="submit" name="submittypebangun" class="btn btn-success" style="font-family: Times New Roman;">Add</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="setwarna">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header btn btn-success">
                  <h5 class="modal-title" style="font-family: Times New Roman; font-weight: bold;">TAMBAHKAN PILIHAN WARNA</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="#" method="POST">
                <div class="modal-body">
                  <select class="custom-select font2">
                    <?php is_null($b);
                    foreach($option_warna as $opwar) : ?>
                      <?php if($opwar['warna_dominan'] != $b) : ?>
                          <option value="<?= $opwar['id_warna_dominan']; ?>"><?= $opwar['warna_dominan']; ?></option>
                      <?php endif;?>
                      <?php $warna = $opwar['warna_dominan']; ?>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-muted font2">Warna...</small>
                  <input type="text" class="form-control size1" name="setwarna" value="<?=$warna?>">
                  <small class="form-text text-muted font2">Masukan Pilihan Warna.</small>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal" style="font-family: Times New Roman;">Close</button>
                   <button type="submit" class="btn btn-danger" name="deletewar" style="font-family:Times New Roman;" onclick="return confirm('Data ini yakin dihapus.?')">Delete</button>
                  <button type="submit" name="submitwar" class="btn btn-success" style="font-family: Times New Roman;">Add</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    <!--SET Kelengkapan Penjualan-->
    <!--Set FOOSEL-->
    <!--Header Buttom-->
    <!--Header--->


    <!---Body--->
    <!--Kotak Pilihan Body---->
    <!--Art-->
    <div class="bd-example" style="margin-top:10px;">
    <!--Header box Art-->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators"> 
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
            <?php $a=2; 
            foreach($query as $que) : ?> 
              <li data-target="#carouselExampleCaptions" data-slide-to="<?=$a?>"></li>
            <?php $a++; 
            endforeach;?>
          </ol>
    <!--Header box Art-->
        <div class="carousel-inner">
    <!--box-->
          <div class="carousel-item active">
              <a href="artadmin.php">
                <div class="artadminimg">
                  <img src="girfoosel2.png" class="mx-auto d-block w-30" alt="Foosel_Art" style="width: 200px; height: 200px;">
                </div>
              </a>
            </div>
          <?php $a=2; 
          foreach($query as $que) : ?> 
            <div class="carousel-item">
              <a href="artadmin.php">
                <div class="artadminimg">
                  <img src="gambar_art/<?= $que["gambar"]; ?>" class="mx-auto d-block" alt="Foosel_Art" style="width: 400px; height: 200px; border-radius: 5px;">
                </div>
                <div class="carousel-caption d-none d-md-block font2">
                  <p style="text-transform: uppercase;"><?= $que["nama"]; ?></p>
                </div>
              </a>
            </div>
           <?php $a++; 
           endforeach;?>
     <!--box-->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
    <!--Art-->


    <!--Furniture-->
    <div class="bd-example" style="margin-top:10px;">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators"> 
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
            <?php $a=2; 
            foreach($query1 as $que) : ?> 
              <li data-target="#carouselExampleCaptions" data-slide-to="<?=$a?>"></li>
            <?php $a++; 
            endforeach;?>
          </ol>
    <!--Header box Art-->
        <div class="carousel-inner">
    <!--box-->
          <div class="carousel-item active">
              <a href="furnitureadmin.php">
                <div class="artadminimg">
                  <img src="girfoosel3.png" class="mx-auto d-block w-30" alt="Foosel_Art" style="width: 200px; height: 200px;">
                </div>
              </a>
            </div>
          <?php $a=2; 
          foreach($query1 as $que) : ?> 
            <div class="carousel-item">
              <a href="furnitureadmin.php">
                <div class="artadminimg">
                  <img src="gambar_furniture/<?= $que["gambar"]; ?>" class="mx-auto d-block" alt="Foosel_Furniture" style="width: 400px; height: 200px; border-radius: 5px;">
                </div>
                <div class="carousel-caption d-none d-md-block font2">
                  <p style="text-transform: uppercase;"><?= $que["nama"]; ?></p>
                </div>
              </a>
            </div>
           <?php $a++; 
           endforeach;?>
     <!--box-->
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
    <!--Furniture-->


    <!--Interior-->
    <div class="bd-example" style="margin-top:10px;">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators"> 
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
            <?php $a=2; 
            foreach($query2 as $que) : ?> 
              <li data-target="#carouselExampleCaptions" data-slide-to="<?= $a?>"></li>
            <?php $a++; 
            endforeach;?>
          </ol>
    <!--Header box Art-->
        <div class="carousel-inner">
    <!--box-->
          <div class="carousel-item active">
              <a href="interioradmin.php">
                <div class="artadminimg">
                  <img src="girfoosel4.png" class="mx-auto d-block w-30" alt="Foosel_Art" style="width: 200px; height: 200px;">
                </div>
              </a>
            </div>
          <?php $a=2; 
          foreach($query2 as $que) : ?> 
            <div class="carousel-item">
              <a href="interioradmin.php">
                <div class="artadminimg">
                  <img src="gambar_interior/<?= $que["gambar"]; ?>" class="mx-auto d-block" alt="Foosel_Interior" style="width: 400px; height: 200px; border-radius: 5px;">
                </div>
                <div class="carousel-caption d-none d-md-block font2">
                  <p style="text-transform: uppercase;"><?= $que["nama"]; ?></p>
                </div>
              </a>
            </div>
           <?php $a++; 
           endforeach;?>
     <!--box-->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
  <!--Interior-->

  <!--Pesanan-->
    <div class="bd-example" style="margin-top:10px;">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators"> 
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
            <?php $a=2; 
            foreach($query2 as $que) : ?> 
              <li data-target="#carouselExampleCaptions" data-slide-to="<?= $a?>"></li>
            <?php $a++; 
            endforeach;?>
          </ol>
    <!--Header box Art-->
        <div class="carousel-inner">
    <!--box-->
          <div class="carousel-item active">
              <a href="pesanan.php">
                <div class="artadminimg">
                  <img src="girfoosel.png" class="mx-auto d-block w-30" alt="Foosel_Art" style="width: 200px; height: 200px;">
                </div>
              </a>
            </div>  
     <!--box-->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
  <!--Pesanan-->
  <!--Kotak Pilihan Body---->
  <!---Body--->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>