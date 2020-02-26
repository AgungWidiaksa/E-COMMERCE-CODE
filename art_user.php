<?php  
require 'php.php';
  if(isset($_GET["submitt"])) {
    if(searchart($_GET["keyword"]) != null){
      $query = searchart($_GET["keyword"]);
      $option_jenis_art = looping("SELECT * FROM jenis_art");
    }
    else{
     header("Location: art_user.php ");
    }
  } 
  else{
    $query = looping("SELECT * FROM objek_foosel_admin where objek ='art' and user_akses='admin'");
    $option_jenis_art = looping("SELECT * FROM jenis_art");
  }
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
    <!--Header Top-->
     <div class="basic">
     <nav class="navbar bg-success navbar-fixed-top">
         <a class="navbar-brand text-light font-weight-bold" style="font-family: Times New Roman; font-size:25px;" href="index.php">
          FOOSEL
          </a>
        <form class="form-inline my-2 my-lg-0" action="" method="GET">
            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search" name="keyword">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="submitt">Search</button>
        </form>
        <a class="nav-link btn btn-outline-light font-weight-bold" href="PesanArt.php">Pesan Art</a>
     </nav>
    <!--Header Top--->
    <!--Header Buttom-->
     <nav class="nav" style="background-color: #0A564C;">
        <a class="text-light font-weight-bold" style="font-family: Times New Roman; font-size:20px; text-decoration:none;" href="index.php">
          Art
        </a>
      </nav>
    <!--Header Buttom-->
    <!--Header--->

    <!---Body--->
    <!--Kotak Pilihan Body---->
            <div class="container">
              <div class="row justify-content-center">
                <?php $a=1; 
                foreach($query as $que) : ?> 
                  <div class="mr-auto" style="position: relative; margin-top: 30px; margin-left: 10px;">
                      <div class="card Small shadow" style="width: 200px; background-color: #0A564C">
                        <div class="artadminimg">
                         <a href="dataartuser.php?id_artt=<?= $que["id"]; ?>"><img src="gambar_art/<?= $que["gambar"]; ?>" class="card-img-top" alt="<?= $que["nama"]; ?>" style="width:200px; height:200px; "></a> 
                        </div>
                        <div class="card-body text-center">
                            <a class="card-title text-light" href="dataartuser.php?id_artt=<?= $que["id"];?>" style="font-family: Times New Roman; font-size: 18px;"><?php echo $que["nama"]; ?></a><br>
                            <a class="card-title text-light" href="#?id_artt=<?= $que["id"];?>" style="font-family: Times New Roman; font-size: 18px;"><?php echo $que["harga"]; ?></a><br>
                          <?php foreach($option_jenis_art as $qui) : ?>
                             <?php if($qui['id_jenis_art'] == $que['id_jenis_art']) : ?>
                              <a class="text-light" href="dataartuser.php?id_artt=<?= $que["id"];?>" style="font-family: Times New Roman; font-size: 18px; text-transform: capitalize;"><?= $qui['jenis_art']; ?></a>
                             <?php endif;?>
                          <?php endforeach;?>
                        </div>
                      </div>
                  </div>
                 <?php $a++; 
                  endforeach;?>
                </div>
              </div>
            </div>
      <!--Kotak Pilihan Body---->
      <!---Body--->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>