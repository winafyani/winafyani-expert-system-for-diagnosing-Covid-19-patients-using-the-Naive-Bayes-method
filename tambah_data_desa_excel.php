<?php 
include 'header.php'; 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Focus - Bootstrap Admin Dashboard </title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="data_penilaian_desa.php">Data Penilaian Desa</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data Desa</li>
      </ol>
      <div class="row">

      </div>
    </div>
    <!-- /.container-fluid-->
      <div class="container-fluid">
     <!-- Icon Cards-->
    <div class="row" style="margin-left: 23%">
    <div class="col-md-8">
      <div class="tile">
        <h3 class="tile-title"><center><u>Tambah Data Desa</u></center></h3>
        <div class="tile-body">
          <form method="post" action="tambah_data_desa_excel_act.php" enctype="multipart/form-data">
            
            <div class="form-group">
              <label class="control-label">Pilih File Excel</label>
              <input name="filedesa" type="file" required="required" class="form-control">
            </div>
            <div class="tile-footer">
              <center><button class="btn btn-primary" name="simpan" type="submit" value="import"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah Data Desa</button></center><br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- /.content-wrapper-->
    <?php
    include 'footer.php';
    ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
