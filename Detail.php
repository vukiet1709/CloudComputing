
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <title>Chi tiết bài hát</title>
    <style type="text/css">
        .images-detail img {
        margin-top: 5%;
        width: 100%;
        align-items: center;
        border-radius: 100%;
        margin-bottom: 30px;
        animation: app-logo-spin infinite 20s linear
        }
        @keyframes app-logo-spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <?php
        session_start();
         $connect= mysqli_connect('localhost','root','','songs_website');
        $id = $_GET["id"];
        $sql = "SELECT * FROM song,singer,genre WHERE song.genre_id = genre.genre_id and song.singer_id = singer.singer_id and song_id = {$id}";
        $result = mysqli_query($connect, $sql);
        while($row= mysqli_fetch_array($result)){
            $id = $row['song_id'];
            ?>
            <div class="col-md-6" style="text-align: left;">
                <h2> Name of Toy: <?php echo $row['song_name'];?> </h2>
                <p>Price: <?php echo $row['song_price'];?> </p>
                       </script>
                       <h4> Genre:<?php echo $row["genre_name"]; ?></h4>

                      <a href="Addcart.php?id=<?php echo $id ;?>">  <button type="submit" name ="buy" class='btn btn-primary'><i class="fas fa-cart-plus"></i> Add to cart</button> 
                      </a>
                    
            </div>  
            <!-- cho ảnh quay tròn-->
            <div class="images-detail">
            <div class="col-md-6">
                <img src="Img/<?php echo $row['song_img'] ?>" style = "width: 500px;height: 500px;">
            </div>
        </div>
       
            <?php
        }

    ?>
    </div>
</div>
</body>
</html>