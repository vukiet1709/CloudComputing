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
</head>
<body>
	<!-- làm giống form đăng ký tài khoản -->
	<form method="POST" enctype="multipart/form-data">
		<?php
		$connect= mysqli_connect('localhost','root','','songs_website');
		?>
		<table>
			<tr> 
				<td> song ID</td>
				<td><input type="text" name="song_id"> </td>
			</tr>
			<tr> 
				<td> song Name</td>
				<td><input type="text" name="song_name"> </td>
			</tr>
			<tr> 
				<td> song description</td>
				<td><input type="text" name="song_description"> </td>
			</tr>
			<tr> 
				<td> song Price</td>
				<td><input type="text" name="song_price"> </td>
			</tr>
			<tr> 
				<td> song Img</td>
				<td><input type="file" name="song_img"> </td>
			</tr>
			<tr> 
				<td> song Audio</td>
				<td><input type="file" name="song_audio"> </td>
			</tr>
			<tr>
					<td>Genre Name</td>
					<td colspan='2'>
						<select name='genre_id'>
							<?php 
									
								$sql2 = 'select * from genre';
								$result2 = mysqli_query($connect, $sql2);
								while($row_cat =  mysqli_fetch_array($result2)){
									$genre_id =$row_cat['genre_id'];
									$genre_name =$row_cat['genre_name'];
									echo "<option value='$genre_id'>$genre_name</option>";		
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Singer Name</td>
					<td colspan='2'>
						<select name='singer_id'>
							<?php 
								
								$sql3 = 'select * from singer';
								$result3 = mysqli_query($connect, $sql3);
								while($row_singer =  mysqli_fetch_array($result3)){
									$singer_id =$row_singer['singer_id'];
									$singer_name =$row_singer['singer_name'];
									echo "<option value='$singer_id'>$singer_name</option>";		
								}
							?>
						</select>
					</td>
				</tr>
			<tr> 
				<td> </td>
				<td><input type="submit" name="add_song" value="Thêm"> </td>
			</tr>
		</table>

	</form>

	<?php 
	if(isset($_POST['add_song'])){
		$song_id = $_POST['song_id'];
		$song_name = $_POST['song_name'];
		$song_price = $_POST['song_price'];
					//Lấy ảnh từ thư mục bất kỳ của máy tính
		$song_img = $_FILES['song_img']['name'];
					// di chuyển ảnh từ thư mục bất kỳ sang thư mục tmp_name của htdocs
		$song_img_tmp = $_FILES['song_img']['tmp_name'];

					// Đưa ảnh từ thư mục tmp sang thư mục cần lưu 
		move_uploaded_file($song_img_tmp, "Image/$song_img");
		$song_audio = $_FILES['song_audio']['name'];
					// di chuyển ảnh từ thư mục bất kỳ sang thư mục tmp_name của htdocs
		$song_audio_tmp = $_FILES['song_audio']['tmp_name'];
		move_uploaded_file($song_audio_tmp, "Audio/$song_audio");
		$genre_id = $_POST['genre_id'];
		$singer_id = $_POST['singer_id'];

					//Thêm sản phẩm vào cơ sở dữ liệu
		$sql = "INSERT INTO song VALUES(NULL,'$song_name','$song_description','$song_price','$song_audio','$song_img','$genre_id','$singer_id')";
		$result = mysqli_query($connect,$sql);
		if($result){
			echo"<script>alert('Thêm mới sản phẩm thành công') </script>";
			echo"<script> window.open('index.php','_self') </script>";
		}
		else{
			echo"<script>alert('Thêm mới lỗi') </script>";
		}
	}
	?>
</body>
</html>
