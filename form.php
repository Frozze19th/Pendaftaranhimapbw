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

    <title>Form Pendaftaran Pengurus HMIF 2021</title>

    <link rel="stylesheet" href="form.css">
</head>
<body>
<?php
session_start();
/*<!-- if(false==$isLoggedIn){
	header("Location: signin.php?error".urlencode("Anda harus login dulu untuk mengakses halaman ini."), 
	true,
	302);
	die("Anda harus login <a herf='signin.php?error=".urlencode("Anda harus login dulu untuk mengakses halaman ini.")."'>Ini</a>.");
}
else{
	header("Location: form.php");
} */
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

	<form method="POST" action="form.php" enctype="multipart/form-data">

    <!-- Card -->
    <div id="card">
        <div id="card-content">
            <div id="card-title">
              <h2>FORMULIR PENDAFTARAN HIMA</h2>
              <div class="underline-title"></div>
            </div>
          </div>
    <!-- Akhir Card -->

    <fieldset>
        <div>
            <input type="text" name="nama" placeholder="Nama Lengkap" required/>
        </div>
        <div>
            <input type="text" name="ttl" placeholder="Tempat, Tanggal Lahir" required/>
        </div>
        <div>
            <input type="text" name="email" placeholder="Email" required/>
        </div>
        <div>
            <input type="text" name="nim" placeholder="NIM" required/>
        </div>
        <div>
            <select name="divisi">
                <option value="BPH">BPH</option>
                <option value="Edukasi">Edukasi</option>
                <option value="Iltek">Iltek</option>
                <option value="Humas">Humas</option>
                <option value="Medkom">Medkom</option>
                <option value="PSDM">PSDM</option>
                <option value="Kreus">Kreasi dan Usaha</option>
            </select>
        </div>
        <br>
        <div>
            <textarea name="alasan" placeholder="Alasan Mendaftar" required></textarea>
        </div>   
    </fieldset>

    <input id="submit-btn" type="submit" name="submit" value="Kirim" /><a href="#" id="kirim">

</form>
</div>
<?php
if (isset($_POST['submit']))
{
		$nama=$_POST['nama'];
		$ttl=$_POST['ttl'];
        $email=$_POST['email'];
        $nim=$_POST['nim'];
        $divisi=$_POST['divisi'];
        $alasan=$_POST['alasan'];

		include "koneksi.php";
		$perintah=mysqli_query($link,"Insert into calon  values ('$nama','$ttl','$email','$nim','$divisi','$alasan','Menunggu')");
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