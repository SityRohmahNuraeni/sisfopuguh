<?php 
require 'function.php';

$siswa = query("SELECT * FROM siswa")


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="dsh.css">

    <title>SISFO PUGUH</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <a class="navbar-brand" href="#">SISFO | <b>SMK PUGUH</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
          <div class="icon">
            <h5>
              <i class="fas fa-envelope mr-3 ml-3" data-toggle="tooltip" title="Surat Masuk"></i>
              <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
              <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i>
            </h5>
          </div>
        </div>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="dashboard.html"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="daftar_siswa.php"><i class="fas fa-user-graduate mr-2"></i>Daftar Siswa</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="daftar_guru.php"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Guru</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-edit mr-2"></i>Daftar Pegawai</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pelajaran.php"><i class="fas fa-calendar-alt mr-2"></i>Jadwal Pelajaran</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="nilai.php"><i class="fas fa-paper-plane mr-2"></i>Nilai Siswa</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>

     

       <?php
       if(isset($_POST["submit"])) {
        if(tambah($_POST) > 0) {
          echo "
            <script>
            alert('siswa berhasil ditambahkan');
            document.location.href = 'daftar_siswa.php';
            </script>
          ";
        }else {
          echo "
             <script>
            alert('siswa gagal ditambahkan');
            document.location.href = 'daftar_siswa.php';
            </script>
          ";
        }
       }

       ?>

        <div class="col-md-10 p-5 pt-2">
       <h3><i class="fas fa-user-graduate mr-2"></i> DAFTAR SISWA</h3><hr>
       <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah_data"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA SISWA</button>

       
        <!-- Modal -->
      <div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-primary" id="exampleModalLabel">Tambah Data Siswa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post">
            <div class="form-group text-primary">
            <label for="daftar_siswa">DAFTAR SISWA</label>
            <input type="text" name="daftar_siswa" class="form-control" id="daftar_siswa" placeholder="Masukan Daftar Siswa" required>
            <label for="nis">NIS</label>
            <input type="text" name="nis" class="form-control" id="nis" placeholder="Masukan Nis Siswa" required>
            <label for="tempat_tgl_lahir">TEMPAT TGL LAHIR</label>
            <input type="text" name="tempat_tgl_lahir" class="form-control" id="tempat_tgl_lahir" placeholder="Masukan Tempat Tanggal Lahir Siswa" required>
            <label for="alamat">ALAMAT</label>
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat Siswa" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button class="btn btn-primary" name="submit" type="submit">Simpan</a></button>
            </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    
             

      <table class="table table-striped table-bordered text-center">
        <thead>
        <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA SISWA</th>
              <th scope="col">NIS</th>
              <th scope="col">TEMPAT TGL LAHIR</th>
              <th scope="col">ALAMAT</th>
              <th colspan="3" scope="col">AKSI</th>
        </tr>
        </thead>
        <?php $i=1; ?>
        <?php foreach($siswa as $swa) : ?>

    <tr>
      <td><?= $i; ?></td>
      <td><?= $swa["nama"]; ?></td>
      <td><?= $swa["nis"]; ?></td>
      <td><?= $swa["tempat_tgl_lahir"]; ?></td>
      <td><?= $swa["alamat"]; ?></td>
      <td>
        <a href="detail_siswa.php?id=<?= $swa["id"]; ?>" class="btn btn-primary mt-2 text-center">Detail</a>
        </td>

      <td><a href="ubah.php?id=<?= $swa["id"]; ?>  "onclick= "return confirm('apakah anda yakin ingin mengubah')"><i class="fas fa-edit" data-toggle="tooltip" title="ubah" style="color: #266de8;"></i></a></td>
      <td><a href="hapus.php?id=<?= $swa["id"]; ?>  "onclick= "return confirm('apakah anda yakin ingin menghapus')"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete" style="color: #266de8;"></i></a></td>
    </tr>
        <?php $i++; ?>
    <?php endforeach; ?>

      </table>
       </div>
      </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script type="text/javascript" src="dsh.js"></script>
  </body>
</html>
