<?php 
include "header.php";
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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cek Status</a></li>
                        </ol>
                    </div>
                </div>

<!-- ISI DI DISINI-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <center><h4 class="card-title" > Anda Merupakan Pasien COVID-19 Dengan Gejala Ringan </h4></center>
                            </div><br> 
                                   <p><ul style="color: black;" >
                            Pasien dengan gejala ringan juga seringkali menderita gejala flu dan merasa mudah lelah serta sakit kepala. Ciri khas dari gejala infeksi ringan adalah tidak adanya sesak napas atau gangguan pernapasan berat.  Gejala-gejala ini pun biasanya mereda dengan sendirinya dalam waktu 7-10 hari.
                            Pada prinsipnya pasien terkonfirmasi COVID-19 yang
                            mengalami sakit ringan sama dengan pasien terkonfirmasi yang tanpa gejala.
                           Anda akan mengalami gejala-gejala berikut berdasarkan ketentuan yang telah disusun oleh pakar.
                           Pasien harus diberikan informasi mengenai gejala dan tanda perburukan yang mungkin terjadi dan nomor contact person yang dapat  dihubungi sewaktu-waktu apabila gejala tersebut muncul. 
                           Mayoritas pasien dengan gejala ringan tidak memerlukan rawat inap kecuali ada kekhawatiran tentang kemungkinan terjadi perburukan yang cepat dan sesuai pertimbangan medis. Pasien dengan gejala ringan dapat dirawat di rumah sakit rujukan Covid-19 atau rumah sakit lain yang memiliki fasilitas sesuai standar pelayanan yang telah ditentukan. Selain itu, juga dapat dirawat di Rumah Sakit Lapangan/Rumah Sakit Darurat terutama bagi pasien yang dapat mandiri/self handling selama dirawat. Selengkapnya silahkan kunjungi halaman buku panduan!
                                </ul><br></p>
                                </div>
                                <center><br><br>
                            <h4 class="title" >Cek Validasi Hasil</h4>
                            <a href="metode.php"><button type="button" class="btn btn-primary btn-sm" style="width: 50%">Naive Bayes</button></a><br>
                            </center>
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