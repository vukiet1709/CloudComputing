<<<<<<< HEAD
<?php
        session_start();
        ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>&gt;
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>&gt;

</head>
<body>
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#"> <span class="glyphicon glyphicon-user"></span>Link</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Dropdown
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>

          </ul>
          
          <form class="form-inline my-2 my-lg-0"  action="search.php" method="GET">
              <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
          <input class="form-control mr-sm-2" type="search" placeholder="Search for song" style="width: 400px" name="Search">
          <input type="submit"name="search" value="Search" />
          <a href='login.php' class='btn btn-primary' style="margin-left: 20px ;" >Login</a> 
          </form>
      </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel"> 
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://play-lh.googleusercontent.com/4i5o3vN_Z4n3LmDoGWeYbcCIQBV530G3VpczY-TQ2RYtRJsEZQmrWYk9bgmfqhjfAhw" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://img.websosanh.vn/v10/users/review/images/a26iomp242kla/lego-ninjago-lloyds.jpg?compress=85" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://kidz.vn/wp-content/uploads/2019/01/lego-2019.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">HOT MUSIC</h2>
		<div class="list-product-subtitle">
			<p>List product description</p>
		</div>
		<div class="product-group">
            <div class="row">            
            <?php
            $connect= mysqli_connect('3.128.54.48','vntk_user','123@123a','vntk_db');
            $sql = "SELECT * FROM song";            
            $result = mysqli_query($connect, $sql);
            // Trả về kết quả dạng 1 mảng
            while ($row_song = mysqli_fetch_array($result)){
                $song_id = $row_song['song_id'];
                $song_name = $row_song['song_name'];
                $song_price = $row_song['song_price'];
                $song_audio = $row_song['song_audio'];
                $song_image = $row_song['song_img'];
                ?>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card card-product mb-3">
                      <img class="card-img-top" src="Img/<?php echo"$song_image"?>">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo"$song_name"?></h5>
                       
                       </script>
                       <?php
                       echo"
                        <a href='detail.php?id=$song_id' class='btn btn-primary'>Detail</a> "?>
                      </div>
                    </div>
                </div>
                <?php
              }
                ?>
               
            </div>
        </div>
	</div>
</div>
<!-- end list product -->

<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

=======
<?php
        session_start();
        ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>&gt;
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>&gt;

</head>
<body>
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#"> <span class="glyphicon glyphicon-user"></span>Link</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Dropdown
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>

          </ul>
          
          <form class="form-inline my-2 my-lg-0"  action="search.php" method="GET">
              <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
          <input class="form-control mr-sm-2" type="search" placeholder="Search for song" style="width: 400px" name="Search">
          <input type="submit"name="search" value="Search" />
          <a href='login.php' class='btn btn-primary' style="margin-left: 20px ;" >Login</a> 
          </form>
      </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel"> 
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://play-lh.googleusercontent.com/4i5o3vN_Z4n3LmDoGWeYbcCIQBV530G3VpczY-TQ2RYtRJsEZQmrWYk9bgmfqhjfAhw" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://img.websosanh.vn/v10/users/review/images/a26iomp242kla/lego-ninjago-lloyds.jpg?compress=85" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://kidz.vn/wp-content/uploads/2019/01/lego-2019.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">HOT MUSIC</h2>
		<div class="list-product-subtitle">
			<p>List product description</p>
		</div>
		<div class="product-group">
            <div class="row">            
            <?php
            $connect= mysqli_connect('3.132.234.157','vntk_user','123@123a','vntk_db');
            $sql = "SELECT * FROM song";            
            $result = mysqli_query($connect, $sql);
            // Trả về kết quả dạng 1 mảng
            while ($row_song = mysqli_fetch_array($result)){
                $song_id = $row_song['song_id'];
                $song_name = $row_song['song_name'];
                $song_price = $row_song['song_price'];
                $song_audio = $row_song['song_audio'];
                $song_image = $row_song['song_img'];
                ?>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card card-product mb-3">
                      <img class="card-img-top" src="Img/<?php echo"$song_image"?>">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo"$song_name"?></h5>
                       
                       </script>
                       <?php
                       echo"
                        <a href='detail.php?id=$song_id' class='btn btn-primary'>Detail</a> "?>
                      </div>
                    </div>
                </div>
                <?php
              }
                ?>
               
            </div>
        </div>
	</div>
</div>
<!-- end list product -->

<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

>>>>>>> 1c7799bf2dcde0691fdc8e7629e6194f6647c940
</html>