<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>&gt;
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>&gt;
	<title></title>
</head>
<body>
	<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form method="post">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" name="fullname" />
                    <label class="form-label" for="form3Example1">Fullname</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="email" id="form3Example2" class="form-control" name="email" />
                    <label class="form-label" for="form3Example2">Email address</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control" name="username" />
                <label class="form-label" for="form3Example3">Username</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="password" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>



              <!-- Submit button -->
              <input type="submit" class="btn btn-primary btn-block mb-4" name="register" value="sign up"/>

              <!-- Register buttons -->
              <div class="text-center">

              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
<?php
$connect= mysqli_connect('localhost','root','','songs_website');
if(isset($_POST['register'])){
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
  	$email = $_POST['email '];
	$sql = "INSERT INTO users VALUES('','$username','$password','$fullname','$email')";
	$result = mysqli_query($connect,$sql);
	if($result){
		?> <script>
        alert("register successful");
        window.location.href = "login.php";
    </script>
    <?php
	}else{
		echo"This account is already existed";
	}
}
    ?>

</body>
</html>