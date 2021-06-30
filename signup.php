<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet">

    <title>Sign Up</title>
    <link rel="stylesheet" href="stylesignup.css">
</head>
<body>
<?php
session_start();
?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <a class="navbar-brand" href="index.php">HMIF Unsoed</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="index.php">Home</a>
            <a class="nav-item nav-link" href="list.php">Recruitment HMIF 2021</a>
            <a class="nav-item nav-link"><?php
		if(isset($_SESSION['status']))
		{
          echo $_SESSION['username'] . '<a class="nav-item btn btn-primary tombol" href="signout.php">Sign out</a>';
			}
		else
		{
          echo '<a class="nav-item btn btn-primary tombol" href="signin.php">Sign in</a>';
		}
				?>
		</a>
            </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <form method="POST" action="signup.php" enctype="multipart/form-data">

    <!-- Card -->
    <div id="card">
        <div id="card-content">
            <div id="card-title">
              <h2>SIGN UP PAGE</h2>
              <div class="underline-title"></div>
            </div>
          </div>
    <!-- Akhir Card -->

    <fieldset>
        <div>
            <input type="text" name="username" placeholder="Username" required/>
        </div>
        <div>
            <input type="password" name="password" placeholder="Password" required/>
        </div>
        <div>
            <input type="text" name="email" placeholder="Email" required/>
        </div>
    </fieldset>

    <input id="submit-btn" type="submit" name="submit" value="kirim" /><a href="#" id="signup">

</form>
</div>
<?php
if (isset($_POST['submit']))
{
		$username=$_POST['username'];
        $password= md5($_POST['password']);
        $email=$_POST['email'];

		include "koneksi.php";
		$perintah=mysqli_query($link,"Insert into user values ('$username', '$password','$email','')");
		//if ($perintah)
		//{
			//echo "sukses";
			//echo "<a href=tampilmahasiswa.php>Lihat Mahasiswa</a>";
		//}
		//else
		//{
				//echo "Gagal";	
		//}
		
}
?>
<!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  -->
</body>
</html>