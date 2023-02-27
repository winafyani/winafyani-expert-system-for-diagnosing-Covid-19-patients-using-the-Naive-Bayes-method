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
                                <h4>Anda Merupakan Pasien Dengan Diagnosa Gejala Berat</h4>
                                <ul class="list-unstyled"></ul><br>
                               <ul style="color: black;"> <h6 class="text-center">
                                  Pasien dengan gejala berat merupakan pasien yang membutuhkan penangan Khusus Tim Medis dikarenakan pasien dengan status berat kan mengalami hampir seluruh gejala umum pasien terkonfirmasi Covid-19.Pada pasien Covid-19 kritis, beberapa gejala Covid-19 berat di atas disertai gangguan pernapasan berat (ARDS), sepsis atau komplikasi infeksi, dan gagal organ.Berikut merupakan gejala kompleks yang telah disusun oleh pakar.</h6></ul><br>
                                <div class="table-responsive">
                                   <div class="row">

          <table class="table table-hover table-bordered" id="sampleTable" width="80%" style="color: black;">
            <thead>
              <tr>
                <th><center>No</center></th>
                <th><center>Gejala Yang Dialami</center></th>
                <th><center>Id Gejala</center>
                </tr>
            </thead>
            <tbody>
              <tr>
                  <td>1.</td>
                  <td>Anda Mengalami Demam Dalam 7 Hari Terakhir</td>
                  <td>G001</td>
              </tr>
              <tr>
                  <td>2.</td>
                  <td>Anda Mengalami Lemas atau kelelahan ringan Dalam 7 Hari Terakhir</td>
                  <td>G002</td>
              </tr>
              <tr>
                  <td>3.</td>
                  <td>Anda Mengalami Batuk Kering Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G003</td>
              </tr>
              <tr>
                  <td>4.</td>
                  <td>Anda Mengalami FLU atau Hidung Tersumbat Dalam 7 Hari Terakhir</td>
             <td>G004</td>
              </tr>
              <tr>
                  <td>5.</td>
                  <td>Anda Mengalami Diare Dalam 7 Hari Terakhir</td>
                  <td>G005</td>
              </tr>
              <tr>
                  <td>6.</td>
                  <td>Anda Mengalami Nyeri Pada Bagian Tubuh (Seperti Nyeri Tenggorokan, Nyeri Otot, Nyeri Tulang, dan Nyeri Perut) Dalam 7 Hari Terakhir</td>
                  <td>G006</td>
              </tr>
              <tr>
                  <td>7.</td>
                  <td>Anda Mengalami Muntah Kepala Dalam 7 Hari Terakhir</td>
                  <td>G007</td>
              </tr>
              <tr>
                  <td>8.</td>
                  <td>Anda Mengalami Batuk Berdahak Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G008</td>
              </tr>
              <tr>
                  <td>9.</td>
                  <td>Anda Mengalami Pusing atau Sakit Kepala Dalam 7 Hari Terakhir</td>
                  <td>G009</td>
              </tr>
              <tr>
                  <td>10.</td>
                  <td>Anda Mengalami Gangguan Pernafasan(Seperti Sesak Nafas,Nafas cepat atau Nafas lambat) Kepala Dalam 7 Hari Terakhir</td>
                  <td>G010</td>
              </tr>
              <tr>
                  <td>11.</td>
                  <td>Anda Mengalami Mual Dalam 7 Hari Terakhir</td>
                  <td>G011</td>
              </tr>
              <tr>
                  <td>12.</td>
                  <td>Anda Mengalami Hilangnya Kemampuan Pengecap Rasa Dalam 7 Hari Terakhir</td>
                  <td>G012</td>
              </tr>
              <tr>
                  <td>13.</td>
                  <td>Anda Mengalami Kejang Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G013</td>
              </tr>
              <tr>
                  <td>14.</td>
                  <td>Anda Mengalami Penurunan Kesadaran atau Pingsan Dalam 7 Hari Terakhir</td>
                  <td>G014</td>
              </tr>
              <tr>
                  <td>15.</td>
                  <td>Anda Mengalami Hilangnya Kemampuan Penciuman Rasa Dalam 7 Hari Terakhir</td>
                  <td>G015</td>
              </tr>
               <td>16.</td>
                  <td>Anda memiliki riwayat kontak erat dengan Pasien Covid-19 dalam 7 hari terakhir</td>
                  <td>G016</td>
              
                
              </tr>
               <tr>
                  <td>17.</td>
                  <td>Anda melakukan perjalanan keluar daerah baik didalam maupun keluar negeri dalam 7 hari terakhir</td>
                  <td>G017</td>
                   <tr>
                  <td>18.</td>
                  <td>Anda sudah melakukan Swab tes atau Rapid Test dengan Hasil test positif</td>
                  <td>G018</td>
            </tbody>
        </table>
     </div>
<h5 class="text-center">Solusi</h5>
                                    <ul style="color: black;" > <h6 class="text-center">
                           Menurut Keputusan Menteri Kesehatan (KMK) Nomor HK.01.07/MENKES/413/2020 
                       <li style="color: black;"></li>
    <li style="color: black;"> tentang Pedoman Pencegahan dan Pengendalian Penyakit, untuk pasien yang terkonfirmasi positif Covid-19 dan menunjukkan gejala berat, berikut adalah langkah penanganannya: 
        <li style="color: black;">1. Dilakukan isolasi sesuai dengan kriteria.</li> 
       <li style="color: black;">2.Pada kasus gejala berat,  perlu dilakukan follow up pemeriksaan RT-PCR dilakukan di rumah sakit.</li> 
        <li style="color: black;">3. Pengambilan spesimen dilakukan oleh petugas laboratorium setempat yang berkompeten dan berpengalaman baik di fasyankes atau lokasi pemantauan.</li>
       <li style="color: black;">4. Pemantauan dilakukan berkala selama belum dinyatakan selesai isolasi.</li>
       <li style="color: black;">5. Petugas kesehatan memberikan komunikasi risiko pada kasus termasuk kontak eratnya berupa informasi mengenai Covid-19, pencegahan penularan, tata laksana lanjut jika terjadi perburukan, dan lainnya.</li>
       <li style="color: black;">6. Penyelidikan epidemiologi pada kasus konfirmasi juga termasuk dalam mengidentifikasi kontak erat.</li>
        <li style="color: black;">7. Pasien dengan gejala berat dapat dirawat di rumah sakit rujukan Covid-19 atau rumah sakit lain yang memiliki fasilitas sesuai standar pelayanan yang telah ditentukan</li>
       <li style="color: black;">8. Dinyatakan selesai isolasi apabila telah mendapatkan hasil pemeriksaan follow-up RT-PCR 1 kali negatif ditambah minimal 3 hari tidak lagi menunjukkan gejala demam dan gangguan pernapasan. </li><br>
        <li style="color: royalblue;"> ♦ Khusus pasien konfirmasi dengan gejala berat/kritis yang sudah dipulangkan, tetap meakukan isolasi mandiri minimal 7 hari dalam rangka pemulihan dan kewaspadaan terhadap munculnya gejala Covid-19 dan secara konsisten menerapkan protokol kesehatan ! ♦</li>
       <br></ul></h6></br>

                            <ul style="color: black;" > <h6 class="text-center">
                           Cek Juga Hasil Validasi berdasarkan Data Pasien sebelumnya kamu Memenuhi kategori Pasien apa ya! Setelah Memperoleh Hasil , Selengkapnya silahkan kunjungi halaman buku panduan!</ul></h6>

                        <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body center">
                    <center>
                        <h4>Validasi Hasil Naive Bayes Berdasarkan data Pasien Sebelumnya</h4>
                        <ul class="list-unstyled"></ul>
                            <ul style="color: darkred;"> <br><p><ins>
                                Berdasarkan Data Pasien Sebelumnya Anda Termasuk Pasien Covid  dengan Status Gejala Berat dengan Probabilitas 1.6456607920647 
                            </ul></ins></p>

                    <ul class="list-unstyled"></ul>
                            <ul style="color: black;">
                                Kunjungi halaman buku panduan untuk melihat solusi terhadap status yang anda dapatkan !
                            </ul>
                            <a href="panduan.php"><button type="button" class="btn btn-primary btn-sm" style="width: 50%">Buku Panduan</button></a></br>
                            <ul style="color: black;"><br>
                                Untuk mencetak hasil diagnosa anda silahkan pilih cetak hasil !</ul>
                            <a href="hasil.php"><button type="button" class="btn btn-success" style="width: 50%" >Cetak Hasil</button></a></center>

                            <br>
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