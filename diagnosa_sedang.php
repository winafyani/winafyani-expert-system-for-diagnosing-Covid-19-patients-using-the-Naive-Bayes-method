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
                    <div class="col-lg-15">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body"><center>
                                <h4>Anda Merupakan Pasien Dengan Diagnosa Gejala SEDANG</h4>
                               <ul style="color: black;" ></center>
                               <ul style="color: black;" ></center><br>
                                    <ul style="color: black;" > <h6 class="text-center">
                            Penderita gejala sedang mungkin masih mampu melakukan berbagai aktivitas, tetapi tubuh mudah merasa lemas.  Gejala ini biasanya berlangsung lebih lama dari gejala ringan, yaitu sekitar 7-14 hari. Tidak hanya itu berikut merupakan beberapa gejala umum yang dialami oleh pasien dengan status sedang yang disusun oleh pakar.</ul></h6><br>
                        
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
                  <td>Anda Mengalami Pusing atau Sakit Kepala Kepala Dalam 7 Hari Terakhir</td>
                  <td>G009</td>
              </tr>
              <tr>
                  <td>9.</td>
                  <td> Anda Mengalami Gangguan Pernafasan(Seperti Sesak Nafas,Nafas cepat atau Nafas lambat) Kepala Dalam 7 Hari Terakhir</td>
                  <td>G010</td>
              </tr>
              <tr>
                  <td>10.</td>
                  <td>Anda Mengalami Mual Kepala Dalam 7 Hari Terakhir</td>
                  <td>G011</td>
              </tr>
              <tr>
                  <td>11.</td>
                  <td>Anda Mengalami Hilangnya Kemampuan Pengecap Rasa Dalam 7 Hari Terakhir</td>
                  <td>G012</td>
              </tr>
              <td>12.</td>
                  <td>Anda memiliki riwayat kontak erat dengan Pasien Covid-19 dalam 7 hari terakhir</td>
                  <td>G016</td>
              
                
              </tr>
               <tr>
                  <td>13.</td>
                  <td>Anda melakukan perjalanan keluar daerah baik didalam maupun keluar negeri dalam 7 hari terakhir</td>
                  <td>G017</td>
                   <tr>
                  <td>14.</td>
                  <td>Anda sudah melakukan Swab tes atau Rapid Test dengan Hasil test positif</td>
                  <td>G018</td>
              </tr>

            </tbody>
        </table>

                                </div>
                                <h5 class="text-center">Solusi</h5>
                                    <ul style="color: black;" > <h6 class="text-center">
                           Menurut Keputusan Menteri Kesehatan (KMK) Nomor HK.01.07/MENKES/413/2020 
                       <li style="color: black;"></li>
    <li style="color: black;"> tentang Pedoman Pencegahan dan Pengendalian Penyakit, untuk pasien yang terkonfirmasi positif Covid-19 dan menunjukkan gejala sedang, berikut adalah langkah penanganannya: 
        <li style="color: black;">1. Dilakukan isolasi sesuai dengan kriteria </li> 
       <li style="color: black;">2.Pada kasus gejala sedang,  perlu dilakukan follow up pemeriksaan RT-PCR</li> 
        <li style="color: black;">3. Pemantauan dilakukan berkala selama belum dinyatakan selesai isolasi </li>
       <li style="color: black;">4. Petugas kesehatan memberikan komunikasi risiko pada kasus termasuk kontak eratnya berupa informasi mengenai Covid-19, pencegahan penularan, tata laksana lanjut jika terjadi perburukan, dan lainnya </li>
       <li style="color: black;">5. Penyelidikan epidemiologi pada kasus konfirmasi juga termasuk dalam mengidentifikasi kontak erat</li>
       <li style="color: black;">6. Pasien gejala sedang dinyatakan selesai isolasi harus dihitung 10 hari sejak tanggal onset dengan ditambah minimal 3 hari setelah tidak lagi menunjukkan gejala demam dan gangguan pernapasan </li>
       <li style="color: black;">7. Pasien dengan gejala sedang dapat dirawat di rumah sakit rujukan Covid-19 atau rumah sakit lain yang memiliki fasilitas sesuai standar pelayanan yang telah ditentukan.</li>
        
        <li style="color: black;">8. Selain itu, juga dapat dirawat di Rumah Sakit Lapangan/Rumah Sakit Darurat terutama bagi pasien yang dapat mandiri/self handling selama dirawat   </li> 
</li><br></ul></h6><br>
                           <ul style="color: black;" > <h6 class="text-center">
                           Cek Juga Hasil Validasi berdasarkan Data Pasien sebelumnya kamu Memenuhi kategori Pasien apa ya! Setelah Memperoleh Hasil , Selengkapnya silahkan kunjungi halaman buku panduan!
                               
                                </ul></h6><br>
                                        <div>
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
                                Berdasarkan Data Pasien Sebelumnya Anda Termasuk Pasien Covid dengan Status Gejala Sedang dengan Probabilitas 0.00043451338574613.
                            </ul></ins></p>
                    <ul class="list-unstyled"></ul>
                            <ul style="color: black;">
                               Kunjungi halaman buku panduan untuk melihat solusi lengkap terhadap status yang anda dapatkan !
                            </ul>
                            <a href="panduan.php"><button type="button" class="btn btn-primary btn-sm" style="width: 50%">Buku Panduan</button></a></br>
                            <br>
                            <ul style="color: black;"><br>
                                Untuk mencetak hasil diagnosa anda silahkan pilih cetak hasil !</ul>
                            <a href="hasil.php"><button type="button" class="btn btn-success" style="width: 50%" >Cetak Hasil</button></a>
                            <br>
                             <ul style="color: black;">
                                Untuk melihat grafik dan data pasien sebelumnya silahkan pilih Data Pasien!
                            </ul>
                    <a href="metode.php"><button type="button" class="btn btn-dark " style="width: 50%">Data Pasien</button></a></center>
    
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