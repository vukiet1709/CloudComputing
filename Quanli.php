<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <title></title>
</head>
<body>
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
          </form>
      </div>
  </div>
</nav>

<table border="1">
    <tr>
        <th>Song Id</th>
        <th>Song Name </th>
        <th>Price </th>
        <th>Images </th>
        <th>Genre Name </th>
        <th>Singer Name </th>
        <th>Action </th>
     </tr>

     
         <?php
         $connect = mysqli_connect('localhost','root','','songs_website');
         $sql = "SELECT * FROM song,singer,genre WHERE song.genre_id = genre.genre_id and song.singer_id = singer.singer_id";
        $result = mysqli_query($connect, $sql);
        while($row= mysqli_fetch_array($result)){
               $song_id = $row['song_id'];
               $song_name = $row['song_name'];
               $song_price = $row['song_price'];
               $song_image = $row['song_img'];
               $genre_name = $row['genre_name'];
               $singer_name = $row['singer_name'];

            ?>
        <tr>
            <td> <?php echo $song_id ?></td>

            <td> <?php echo $song_name ?></td>
            <td> <?php echo $song_price ?></td>
            <td> <img src="Img/<?php echo $song_image ?>" style ="width: 100px;"></td>
            <td> <?php echo $genre_name ?></td>
            <td> <?php echo $singer_name ?></td>
            <td> <a href="editsong.php?id=<?php echo $song_id ?>">Update Song </a></td>
            <td> <a href="?id=<?php echo $song_id ?>">Delete Song </a></td>
             </tr>
             <?php
             }
             ?>

     
</table>
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql="DELETE FROM song where song_id = $id";
    $result=mysqli_query($connect,$sql);
    if($result) {
        echo "<script> alert ('Xóa thành công!')</script>";
    }
} else{
    
}
?>
</body>
</html>
