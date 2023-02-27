<?php
include "header.php";

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SISTEM PAKAR DIAGNOSA COVID-19 </title>
    <!-- Favicon icon -->
    
    <link href="./vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="./vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
      
                                
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
                        </ol>
                    </div>
                </div>

<!-- ISI DI DISINI-->
<div class="row" style="margin-left: 23%">
        <div class="col-md-8">
            <div class="tile">
                <h3 class="tile-tile">Form Tambah Data</h3>
                <div class="tile-body">
                    <form method="post" action="tambah_data_act.php" enctype="multipart/form-data">
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Kategori Usia</label><br><center>
                        <select name="kategori_usia" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>

                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Demam</label><br><center>
                        <select name="demam" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>

                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Lemas</label><br><center>
                        <select name="lemas" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Batuk Kering</label><br><center>
                        <select name="batuk_kering" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Flu</label><br><center>
                        <select name="flu" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Diare</label><br><center>
                        <select name="diare" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Nyeri Pada Bagian Tubuh</label><br><center>
                        <select name="nyeri" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Muntah</label><br><center>
                        <select name="muntah" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Batuk Berdahak</label><br><center>
                        <select name="batuk_berdahak" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Pusing</label><br><center>
                        <select name="pusing" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Gangguan Pernapasan</label><br><center>
                        <select name="pernapasan" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Mual</label><br><center>
                        <select name="mual" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Hilangnya Kemampuan Perasa</label><br><center>
                        <select name="perasa" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Kejang</label><br><center>
                        <select name="kejang" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Penurunan Kesadaran / Pingsan</label><br><center>
                        <select name="pingsan" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Hilangnya Kemampuan Penciuman</label><br><center>
                        <select name="penciuman" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="YES">YA</option>
                            <option value="NO">TIDAK</option>
                        </select></center>
                        </div>
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">Status Pasien</label><br><center>
                        <select name="status_pasien" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="RINGAN">RINGAN</option>
                            <option value="SEDANG">SEDANG</option>
                            <option value="BERAT">BERAT</option>
                        </select></center>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" name="simpan" type="submit" value="simpan">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

     
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php
        include "footer.php";
        ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

    <script src="./vendor/chartist/js/chartist.min.js"></script>

    <script src="./vendor/moment/moment.min.js"></script>
    <script src="./vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="./js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

</body>

</html>