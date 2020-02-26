<?php
  require 'php.php';
  require 'php1.php';
 // var_dump($_POST);
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

  if(isset($_GET["submitt"])) {
    if(searchfur($_GET["keyword"]) != null){
      $query3 = searchfur($_GET["keyword"]);
      $option_jenis_furniture = looping("SELECT * FROM jenis_furniture");
    }
    else{
     header("Location: furnitureadmin.php ");
    }
  } 
  else{
    $query3 = looping("SELECT * FROM objek_foosel_admin where objek = 'furniture' and user_akses = 'admin'");
    $option_jenis_furniture = looping("SELECT * FROM jenis_furniture");
  }

  $query = looping("SELECT * FROM objek_foosel_admin where objek ='art' and user_akses='admin'");
  $query2 = looping("SELECT * FROM objek_foosel_admin where objek ='interior' and user_akses='admin'");
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
      <nav class="navbar bg-success">
         <a class="navbar-brand text-light font-weight-bold" style="font-family: Times New Roman; font-size:25px;" href="index.php">
            FOOSEL
          </a>
        <form class="form-inline">
          <div class="input-group">
            <input class="form-control" type="search" aria-label="Search" aria-describedby="button-addon2">
            <div class="input-group-append" style="font-family: Times New Roman;">
              <button class="btn btn-outline-light font-weight-bold" type="submit" id="button-addon2">Search</button>
            </div>
          </div>
        </form>
        <ul class="nav space">
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light mr-2 font-weight-bold" href="#" data-toggle="modal" data-target="#setart" >Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light font-weight-bold" href="registrasi.php">Registrasi</a>
          </li>
        </ul>
         <div class="modal" tabindex="-1" role="dialog" id="setart">
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
        <a class="text-light font-weight-bold" style="font-family: Times New Roman; font-size:20px; text-decoration:none;" href="index.php">
          Art.Furniture.Interior
        </a>
        <a class="nav-link mr-2 font-weight-bold" href="#" data-toggle="modal" data-target="#ker" style="font-family: Times New Roman; color:#fff;">Keranjang</a>
         <div class="modal" tabindex="-1" role="dialog" id="ker">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Belanja</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
      </nav>
    <!--Header Buttom-->
    <!--Header--->


    <!---Body--->
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
              <a href="art_user.php">
                <div class="artadminimg">
                  <img src="gambar_art/<?= $que["gambar"]; ?>" class="mx-auto d-block" alt="Foosel_Art" style="width: 400px; height: 200px; border-radius: 5px;">
                </div>
                <div class="carousel-caption d-none d-md-block font2">
                  <p style="text-transform: uppercase;">Art</p>
                </div>
              </a>
            </div>
          <?php $a=2; 
          foreach($query as $que) : ?> 
            <div class="carousel-item">
              <a href="art_user.php">
                <div class="artadminimg">
                  <img src="gambar_art/<?= $que["gambar"]; ?>" class="mx-auto d-block" alt="Foosel_Art" style="width: 400px; height: 200px; border-radius: 5px;">
                </div>
                <div class="carousel-caption d-none d-md-block font2">
                  <p style="text-transform: uppercase;">Art</p>
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

    <!--Interior-->
    <div class="bd-example" style="margin-top:10px;">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators"> 
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
            <?php  
            foreach($query2 as $que) : ?> 
              <li data-target="#carouselExampleCaptions" data-slide-to="<?= $a?>"></li>
            <?php 
            endforeach;?>
          </ol>
    <!--Header box Interior-->
        <div class="carousel-inner">
    <!--box-->
          <div class="carousel-item active">
              <a href="interior_user.php">
                <div class="artadminimg">
                  <img src="gambar_interior/<?= $que["gambar"]; ?>" class="mx-auto d-block" alt="Foosel_Interior" style="width: 400px; height: 200px; border-radius: 5px;">
                </div>
                <div class="carousel-caption d-none d-md-block font2">
                  <p style="text-transform: uppercase;">Interior</p>
                </div>
              </a>
          </div>
          <?php 
          foreach($query2 as $que) : ?> 
            <div class="carousel-item">
              <a href="interior_user.php">
                <div class="artadminimg">
                  <img src="gambar_interior/<?= $que["gambar"]; ?>" class="mx-auto d-block" alt="Foosel_Interior" style="width: 400px; height: 200px; border-radius: 5px;">
                </div>
                <div class="carousel-caption d-none d-md-block font2">
                  <p style="text-transform: uppercase;">Interior</p>
                </div>
              </a>
            </div>
           <?php endforeach;?>
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

    <!---Furniture--->
    <!--Kotak Pilihan Body---->
      <div class="container">
              <div class="row justify-content-center">
                <?php foreach($query3 as $que) : ?> 
                    <div class="mr-auto" style="position: relative; margin-top: 30px; margin-left: 10px;">
                        <div class="card Small shadow" style="width: 200px; background-color: #0A564C">
                          <div class="artadminimg">
                           <a href="datafurnitureuser.php?id_furnituree=<?= $que["id"];?>"><img src="gambar_furniture/<?= $que["gambar"]; ?>" class="card-img-top" alt="<?= $que["nama"]; ?>" style="width:200px; height:200px; "></a> 
                          </div>
                          <div class="card-body text-center">
                              <a class="card-title text-light" href="datafurnitureuser.php?id_furnituree=<?= $que["id"];?>" style="font-family: Times New Roman; font-size: 18px;"><?php echo $que["nama"]; ?></a><br>
                            <?php foreach($option_jenis_furniture as $qui) : ?>
                               <?php if($qui['id_jenis_furniture'] == $que['id_jenis_furniture']) : ?>
                                <a class="text-light" href="datafurnitureuser.php?id_furnituree=<?= $que["id"];?>" style="font-family: Times New Roman; font-size: 18px; text-transform: capitalize;"><?= $qui['jenis_furniture']; ?></a><br>
                               <?php endif;?>
                            <?php endforeach;?>
                              <a class="card-title text-light" href="datafurnitureuser.php?id_furnituree=<?= $que["id"];?>" style="font-family: Times New Roman; font-size: 18px;"><?php echo $que["harga"]; ?></a>
                          </div>
                        </div>
                    </div>
                 <?php endforeach;?>
                </div>
              </div>
            </div>
      <!--Kotak Pilihan Body---->
    <!--Furniture>
    <!---Body-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>