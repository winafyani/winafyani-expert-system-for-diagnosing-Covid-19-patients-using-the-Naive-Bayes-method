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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Diagnosa</a></li>
                        </ol>
                    </div>
                </div>

<!-- ISI DI DISINI-->
    
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body"><center><ul style="color: black;"> 
                                <h4>Anda Merupakan Pasien Tanpa Gejala</h4>
                                <ul class="list-unstyled"></ul><br>
                               <ul style="color: black;"> <h6 class="text-center">
                                  Pasien tanpa gejala adalah pasien yang tidak mengalami gejala apapun meski telah terpapar Virus Corona. Hal ini Tentu sangat berbahaya karena tidak merasakan adanya gejala tertentu. Dari tingginya penularan Covid-19, adanya orang tanpa gejala (OTG) yang dapat menyebarkan virus salah satu yang paling diwaspadai.
                              Sebuah studi yang diterbitkan pada jurnal JAMA Open Network, para ahli Pusat Pengendalian dan Pencegahan Penyakit (CDC) menemukan, lebih dari setengah dari total penularan Covid-19 ternyata berasal dari orang yang tidak mempunyai gejala.</h6></ul><br></ul></center>
                                     <ul style="color: black;"> 
                        Diagnosa tanpa gejala merupakan pasien yang dapat terkontaminasi virus corona namun tidak mengalami gejala apapun selama masa inkubasi yang terjadi pada rata-rata adalah 5-6 hari. Hal ini tentu akan membawa dampak buruk jika seseorang tidak menyadari mereka tertular vurus corona karena tidak mengalami gajala apappun. Seseorang dapat dikategorikan pasien tanpa gejala jika telah melakukan beberapa hal seperti:</ul><br>
                        <ul>
<li style="color: black;">1. Melakukan kontak erat dengan pasien Cvid-19 sebelumnya seperti  kontak tatap muka/berdekatan dengan kasus probable atau kasus konfirmasi dalam radius 1 meter dan dalam jangka waktu 15 menit atau lebih.
Sentuhan fisik langsung dengan kasus probable atau konfirmasi (seperti bersalaman,berpegangan tangan, dan lain-lain). </li>
<li style="color: black;"> 2.   Orang yang memberikan perawatan langsung terhadap kasus probable atau konfirmasi tanpa menggunakan APD yang sesuai standar. </li>
<li style="color: black;"> 3. Situasi lainnya yang mengindikasikan adanya kontak erat berdasarkan penilaian risiko lokal yang ditetapkan oleh tim penyelidikan epidemiologi setempat</li>
<li style="color: black;"> 4.  Melakukan perjalanan dari dalam negeri (domestik) maupun luar negeri pada 14 hari terakhir.</li><br>
                       
                                         
  <h4 class="text-center">Solusi</h4>
                                    <ul style="color: black;" > <h6 class="text-center">
                           Menurut Keputusan Menteri Kesehatan (KMK) Nomor HK.01.07/MENKES/413/2020 
                       <li style="color: black;"></li>
                        <ul>
<li style="color: black;">1. Pada prinsipnya pasien terkonfirmasi COVID-19 yang tanpa gejala tidak
memerlukan rawat inap di Rumah Sakit, tetapi pasien harus menjalani
isolasi selama 10 hari sejak pengambilan spesimen diagnosis konfirmasi,
baik isolasi mandiri di rumah maupun di fasilitas publik yang dipersiapkan
pemerintah. </li>
<li style="color: black;"> 2.   Isolasi ini penting untuk mengurangi tingkat penularan yang terjadi di
masyarakat. Pasien yang menjalani isolasi harus menjalankan aturanaturan terkait PPI dan dilakukan monitoring secara berkala baik melalui
kunjungan rumah maupun secara telemedicine oleh petugas FKTP.  </li>
<li style="color: black;"> 3. Pasien sebaiknya diberikan leaflet berisi hal-hal yang harus diketahui dan dilaksanakan, pasien diminta melakukan pengukuran suhu tubuh sebanyak dua kali sehari. Setelah 10 hari pasien akan kontrol ke FKTP terdekat.</li><br>





                    <center>
                        <h4>Validasi Hasil Naive Bayes Berdasarkan data Pasien Sebelumnya</h4>
                        <ul class="list-unstyled"></ul>
                            <ul style="color: darkred;"><p><ins>
                                Karena Anda Merupakan Pasien Tanpa Gejala Maka Sistem Tidak Akan Menampilkan Hasil Validasi Data Sebelumnya Dikarenakan Data sebelumnya Menggunakan Gejala Sebagai Indikator Penentuan Hasil Validasi.
                            </ul></ins></p>

                    <ul class="list-unstyled"></ul>
                            <ul style="color: black;">
                                Kunjungi halaman buku panduan untuk melihat solusi terhadap status yang anda dapatkan !
                            </ul>
                            <a href="panduan.php"><button type="button" class="btn btn-primary btn-sm" style="width: 50%">Buku Panduan</button></a></br>
                            <br>
                            <ul style="color: black;"><br>
                                Untuk mencetak hasil diagnosa anda silahkan pilih cetak hasil !</ul>
                            <a href="hasil.php"><button type="button" class="btn btn-success" style="width: 50%" >Cetak Hasil</button></a></center>

                             <ul style="color: black;">
                                Untuk melihat grafik dan data pasien sebelumnya silahkan pilih Data Pasien!
                            </ul>
                    <a href="metode.php"><button type="button" class="btn btn-dark " style="width: 50%">Data Pasien</button></a>
                    </center>
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