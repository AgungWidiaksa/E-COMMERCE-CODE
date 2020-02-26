<?php  
require 'php.php';
  if(isset($_GET["submitt"])) {
    if(searchfur($_GET["keyword"]) != null){
      $query = searchfur($_GET["keyword"]);
      $option_jenis_furniture = looping("SELECT * FROM jenis_furniture");
    }
    else{
     header("Location: furnitureadmin.php ");
    }
  } 
  else{
    $query = looping("SELECT * FROM objek_foosel_admin where objek = 'furniture'and user_akses = 'admin'");
    $option_jenis_furniture = looping("SELECT * FROM jenis_furniture");
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
      <nav class="navbar bg-success navbar-fixed-top">
         <a class="navbar-brand text-light font-weight-bold" style="font-family: Times New Roman; font-size:25px;" href="index2.php">
          FOOSEL
          </a>
          <form class="form-inline my-2 my-lg-0" action="" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="submitt">Search</button>
          </form>
        <a class="nav-link btn btn-outline-light font-weight-bold" href="insert_furniture.php">Insert Furniture</a>
      </nav>
    <!--Header Top--->
    <!--Header Buttom-->
      <nav class="nav" style="background-color: #0A564C;">
        <a class="text-light font-weight-bold" style="font-family: Times New Roman; font-size:20px; text-decoration:none;" href="index2.php">
          Furniture
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
                         <a href="datafurniture.php?id_furnituree=<?= $que["id"];?>"><img src="gambar_furniture/<?= $que["gambar"]; ?>" class="card-img-top" alt="<?= $que["nama"]; ?>" style="width:200px; height:200px; "></a> 
                        </div>
                        <div class="card-body text-center">
                            <a class="card-title text-light" href="datafurniture.php?id_furnituree=<?= $que["id"];?>" style="font-family: Times New Roman; font-size: 18px;"><?php echo $que["nama"]; ?></a><br>
                          <?php foreach($option_jenis_furniture as $qui) : ?>
                             <?php if($qui['id_jenis_furniture'] == $que['id_jenis_furniture']) : ?>
                              <a class="text-light" href="datafurniture.php?id_furnituree=<?= $que["id"];?>" style="font-family: Times New Roman; font-size: 18px; text-transform: capitalize;"><?= $qui['jenis_furniture']; ?></a>
                             <?php endif;?>
                          <?php endforeach;?>
                          <p class="card-text"></p>
                          <a href="update_furniture.php?id_upfurniture=<?= $que["id"]; ?>" class="btn btn btn-secondary btn-sm" style="font-family: Times New Roman; font-size: 12px">Update</a>
                          <a href="php.php?id_furniture=<?= $que["id"]; ?>" class="btn btn-danger btn-sm" style="font-family: Times New Roman; font-size: 12px">Delete</a>
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
  </body>
</html>