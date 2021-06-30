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
    <title>Pendaftar</title>
    <link rel="stylesheet" href="stylelist.css">
</head>
<body>
<?php
session_start();
?>
<?php
include_once 'koneksi.php';if(isset($_POST['cari'])){
	$kata=$_POST['kata'];
	$result=mysqli_query($link,"select*from calon where nim='$kata' or nama like '%$kata%'");
}
else{
$result=mysqli_query($link,"select*from calon");
}
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
          <a class="nav-item nav-link" href="index_admin.php">Home</a>
          <a class="nav-item nav-link active" href="list_admin.php">Recruitment HMIF 2021 <span class="sr-only">(current)</span></a>
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

    <!-- Card -->
    <div id="card">
        <div id="card-content">
            <div id="card-title">
              <h2>Pendaftar Pengurus Himpunan Periode 2021</h2>
              <div class="underline-title"></div>
            </div>
          </div>
    <!-- Akhir Card -->

<fieldset>
<form method="POST" action="list_admin.php" enctype="multipart/form-data">
<form>
  <input class="search" type="text" name="kata" placeholder="Cari...">	
  <input class="button" type="submit" name="cari" value="Cari">		
</form>
		<!-- <div>
            <input type="text" name="kata" placeholder="Nama/NIM" />
        </div>
<input id="submit-btn" type="submit" name="cari" value="Cari" /> -->
<table class="table table-bordered table-striped">
<thead>
  <th>No</th>
	<th>Nama</th>
	<th>Tempat, Tanggal Lahir</th>
	<th>Email</th>
	<th>NIM</th>
    <th>Divisi</th>
    <th>Alasan</th>
    <th>Keterangan</th>
	<th>Action</th>
</thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $i+1; ?></td>
<td><?php echo $row["nama"]; ?></td>
<td><?php echo $row["ttl"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["nim"]; ?></td>
<td><?php echo $row["divisi"]; ?></td>
<td><?php echo $row["alasan"]; ?></td>
<td><?php echo $row["keterangan"]; ?></td>
<td><a href="update.php?nim=<?php echo $row["nim"]; ?>">Update</a> | <a href="hapus.php?nim=<?php echo $row["nim"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>  
</fieldset>
</div>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>
    
</body>
</html>