<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Hello, world!</title>
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

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark  mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="dashboard.html"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="siswa.html"><i class="fas fa-user-graduate mr-2"></i>Daftar Siswa</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="guru.html"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Guru</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pegawai.html"><i class="fas fa-user-edit mr-2"></i>Daftar Pegawai</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="jadwal.html"><i class="fas fa-calendar-alt mr-2"></i>Jadwal Pelajaran</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="nilai.html"><i class="fas fa-paper-plane mr-2"></i>Nilai Siswa</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-paper-plane mr-2"></i> NILAI SISWA</h3><hr>

        <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA NILAI SISWA</a>
        <table class="table table-striped table-bordered mt-2 text-center">
          <thead>
            <tr class="text-center">
              <th scope="col">NO</th>
              <th scope="col">NAMA SISWA</th>
              <th scope="col">MATA PELAJARAN</th>
              <th scope="col">NILAI AKHIR</th>
              <th scope="col" colspan="3">AKSI</th>
            </tr>

          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Siti Rohmah Nuraeni</td>
              <td>B.INGGRIS</td>
              <td>96</td>
              <td><button type="submit" class="btn btn-primary">Detail</button></td>
              <td><i class="fas fa-edit" style="color: #4a82e3;" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt" style="color: #d41629;" data-toggle="tooltip" title="Delete"></i></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Mutia Cahyani</td>
              <td>MATEMATIKA</td>
              <td>97</td>
              <td><button type="submit" class="btn btn-primary">Detail</button></td>
              <td><i class="fas fa-edit" style="color: #4a82e3;" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt" style="color: #d41629;" data-toggle="tooltip" title="Delete"></i></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Fristiandini</td>
              <td>PJOK</td>
              <td>96</td>
              <td><button type="submit" class="btn btn-primary">Detail</button></td>
              <td><i class="fas fa-edit" style="color: #4a82e3;" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt" style="color: #d41629;" data-toggle="tooltip" title="Delete"></i></td>
            </tr>

          </tbody>
        </table>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>