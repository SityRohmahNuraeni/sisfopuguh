<?php
require 'function.php';
$id = $_GET["id"];
$swa = query("SELECT * FROM siswa WHERE id=$id") [0];


	if (isset($_POST["submit"]) ) {
		if (ubah($_POST) > 0){
			echo "
				<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';
				</script>
			";
		}else {
			echo "
			<script>
				alert('data gagal diubah');
				document.location.href = 'index.php';
				</script>
			";
		}
	}

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>sisfo puguh</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <a class="navbar-brand" href="#">SISFO | <b>SMK PUGUH</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="icon ml-4">
          <h5>
            <i class="fas fa-envelope mr-3" data-toogle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell mr-3" data-toogle="tooltip" title="Notifikasi"></i>
            <i class="fas fa-sign-out-alt mr-3 data-toogle="tooltip" title="Sign Out""></i>
          </h5>
        </div>
      </div>
    </nav>

</body>
</html>