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
</body>
</html>
<?php

session_start();
?>

<div id="content_area"> 

  <div class="shopping_cart_container">

    <div id="shopping_cart" align="right" style="padding:15px">
      <?php 

      if(isset($_SESSION['username'])){

        echo "<b>Your username:</b>" . $_SESSION['username'];

      }else{

        echo "";
      }

      ?>



    </div><!-- /.shopping_cart --> 

    <form action="" method="post" enctype="multipart/form-data">
      <table align="center" width="100%">

        <tr align="center">
          <th> Song ID </th>
          <th>Song Name</th>
          <th>Song Price</th>          
          <th>Remove</th>
        </tr>

        <?php 
        $connect = mysqli_connect('localhost','root','','songs_website');
        $total = 0;
          //lấy user_id đăng nhập
        $user_id = $_SESSION['user_id'];

        $result = mysqli_query($connect, "select * from orders where user_id={$user_id}");

        while($row = mysqli_fetch_array($result)){

          $song_id = $row['song_id'];


          $result_song = mysqli_query($connect, "select * from song where song_id = '$song_id'");
          while($row_song = mysqli_fetch_array($result_song)){
            //Lấy ra các thông tin song

            $song_name = $row_song['song_name'];
            $song_price = $row_song['song_price'];
            $song_img = $row_song['song_img'];


              // Getting Quality of the product

            ?>
            <tr align="center">

             <td> <?php echo $song_id ?> </td>
             <td>
              <?php echo $song_name;?>
              <br />
              <img src="img/<?php echo $song_img; ?> " style="width: 100px; height: 100px;" />
            </td>
            <td><?php echo $song_price; ?></td>
            <td><input type="checkbox" name="remove[]" value="<?php echo $song_id;?>" /></td>
          </tr>

        <?php } } // End While  ?> 

        <tr>
          <td colspan="4" align="right"><b>Sub Total:</b></td>
          <td><?php echo  $total; ?> </td>
        </tr>
        <tr>
          <td>
            <label>Người Nhận</label>
            <input type="text" class="form-control" name="nguoinhan">
          </td>
        </tr>
        <tr>
          <td>
            <label>Số điện thoại</label>
            <input type="text" class="form-control" name="sdt">
          </td>
        </tr>
        <tr>
          <td>
            <label>Địa chỉ</label>
            <input type="text" class="form-control" name="diachi">
          </td> 
        </tr>
        <tr>
          <td>
            <label>Ghi chú</label>
            <textarea name="not" id="" cols="" rows="" class="form-control"></textarea>
          </td>  
        </tr>
        <tr align="center">
          <td colspan="2"><input type="submit" name="update_cart" value="Update Cart" /></td>
          <a href="music.php"><td><input type="submit" name="continue" value="Continue Shopping" /></td></a>
<td><button><a href="checkout.php">Checkout</a></td>
          </tr>

        </table>
      </form>

      <?php 
      if(isset($_POST['remove'])){

        foreach($_POST['remove'] as $remove_id){

          $run_delete = mysqli_query($con,"delete from orders where song_id = '$remove_id'");

          if($run_delete){
            echo "<script>window.open('Addcart.php','_self')</script>";
          }
        }
      }

      if(isset($_POST['continue'])){
        echo "<script>window.open('index.php','_self')</script>";
      }

      ?>

    </div><!-- /.shopping_cart_container-->

    <div id="products_box">   


    </div><!-- /#products_box -->
  </div><!-- /#content_area -->

</div><!-- /.content_wrapper-->
<!------------ Content wrapper ends -------------->
