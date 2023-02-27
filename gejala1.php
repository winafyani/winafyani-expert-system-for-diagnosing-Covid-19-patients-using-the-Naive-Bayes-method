<?php 
include "header.php";
include "koneksi.php";
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Gejala</a></li>
                        </ol>
                    </div>
                </div>

<!-- ISI DI DISINI-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                <div class="row" style="margin-left: 23%">
        <div class="col-md-8">
            <div class="tile"><center>
                <h5 class="tile-tile" style="color:black;"> Silahkan Jawab Pertanyaan Berikut Ini Berdasarkan Gejala Yang Anda Alami !</h5></center>
                <div class="tile-body">
                    <form method="post" action="gejala_pakar_nb.php" enctype="multipart/form-data">
                        <div class="form-group">
                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">1. Apakah anda mengalami demam dalam 7 hari terakhir?</label><br><center>
                        <select name="G001" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>

                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">2. Apakah anda mengalami kelelahan ringan atau lemas ?</label><br><center>
                        <select name="G002" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>

                        <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">3. Apakah anda mengalami batuk kering dalam 7 hari terakhir?</label><br><center>
                        <select name="G003" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>
                    
                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">4. Apakah anda mengalami flu atau hidung tersumbat pada 7 hari terakhir?</label><br><center>
                        <select name="G004" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>

                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">5. Apakah anda mengalami diare dalam 7 hari 7 terakhir?</label><br><center>
                        <select name="G005" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>

                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">6. Apakah anda merasakan nyeri pada bagian tubuh seperti nyeri perut,nyeri otot,nyeri tulang atau nyeri tenggorokan pada 7 hari terakhir?</label><br><center>
                        <select name="G006" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>

                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">7. Apakah anda mengalami muntah dalam 7 hari terakhir?</label><br><center>
                        <select name="G007" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>

                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">8. Apakah anda mengalami batuk berdahak dalam 7 hari terakhir?</label><br><center>
                        <select name="G008" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>
                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">9. Apakah anda mengalami pusing atau sakit kepala dalam 7 hari terakhir?</label><br><center>
                        <select name="G009" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>

                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">10. Apakah anda mengalami gangguan pernafasan seperti sesak nafas,nafas cepat atau kesulitan bernafas dalam 7 hari terakhir?</label><br><center>
                        <select name="G010" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>

                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">11. Apakah anda mengalami mual dalam 7 hari terakhir?</label><br><center>
                        <select name="G011" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>

                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">12. Apakah anda mengalami kehilangan kemampuan indera pengecap rasa dalam 7 hari terakhir?</label><br><center>
                        <select name="G012" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>

                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">13. Apakah anda mengalami kejang pada 7 hari terakhir?</label><br><center>
                        <select name="G013" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>
                    
                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">14. Apakah anda mengalami penurunan kesadaran atau pingsan dalam 7 hari terakhir?</label><br><center>
                        <select name="G014" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>

                    <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">15. Apakah anda mengalami kehilangan kemampuan indera penciuman dalam 7 hari terakhir?</label><br><center>
                        <select name="G015" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>
                         <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">16. Apakah anda memiliki riwayat kontak erat dengan Pasien Covid-19 dalam 7 hari terakhir?</label><br><center>
                        <select name="G016" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>
                         <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">17. Apakah anda melakukan perjalanan keluar daerah baik didalam maupun keluar negeri dalam 7 hari terakhir?</label><br><center>
                        <select name="G017" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>
                         <div class="form-group">
                        <br>
                        <label class="control-label" style="color: black;">18. Apakah anda sudah melakukan Swab tes atau Rapid Test dengan Hasil test positif?</label><br><center>
                        <select name="G018" class="isian-formulir isian-formulir-border">
                            <option value="" select="selected">Pilih Jawaban</option>
                            <option value="ya">YA</option>
                            <option value="tidak">TIDAK</option>
                        </select></center>
                        </div>
                    <center>
                        <div class="tile-footer">
                            <button class="btn btn-primary" name="simpan" type="submit" value="simpan">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>Cek Hasil Rule & Validasi
                            </button>
                    </center>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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