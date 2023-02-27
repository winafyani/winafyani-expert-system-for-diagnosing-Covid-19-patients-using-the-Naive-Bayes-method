<?php 
include "header.php";
include 'koneksi.php';

if(isset($_POST['simpan']) && $_POST['simpan']!=""){


    $G001 = $_POST["G001"];
    $G002 = $_POST["G002"];
    $G003 = $_POST['G003'];
    $G004 = $_POST['G004'];
    $G005 = $_POST['G005'];
    $G006 = $_POST['G006'];
    $G007 = $_POST['G007'];
    $G008 = $_POST['G008'];
    $G009 = $_POST['G009'];
    $G010 = $_POST['G010'];
    $G011 = $_POST['G011'];
    $G012 = $_POST['G012'];
    $G013 = $_POST['G013'];
    $G014 = $_POST['G014'];
    $G015 = $_POST['G015'];
    $G016 = $_POST['G016'];
    $G017 = $_POST['G017'];
    $G018 = $_POST['G018'];




     // Algoritma
// 1. menghitung prior probabilities P(Ci) dari setiap jenis Klasifikasi, terdapat 3 class.
            $sql1 = mysqli_query($db, "SELECT status_pasien FROM naive_bayes");
            $jmlKlasifikasi = mysqli_num_rows($sql1);

            // Hitung Jumlah Masing-masing jenis Klasifikasi
            $sql =  mysqli_query($db, "SELECT status_pasien FROM naive_bayes WHERE status_pasien LIKE '%dang%'");
            $jmlSedang = mysqli_num_rows($sql);

            $sql =  mysqli_query($db, "SELECT status_pasien FROM naive_bayes WHERE status_pasien LIKE '%ngan%'");
            $jmlRingan = mysqli_num_rows($sql);

            $sql =  mysqli_query($db, "SELECT status_pasien FROM naive_bayes WHERE status_pasien LIKE '%rat%'");
            $jmlBerat = mysqli_num_rows($sql);

            // Menghitung PCi
            $pKlasRingan = $jmlRingan / $jmlKlasifikasi;
            $pKlasSedang = $jmlSedang / $jmlKlasifikasi;
            $pKlasBerat = $jmlBerat / $jmlKlasifikasi;

// 2. menghitung conditional probabilities P(Xt|Ci) jumlah kasus yang sama dengan class yang sama .

            // Probabilitas P(Demam | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT demam FROM naive_bayes WHERE demam = '$G001' && status_pasien = 'ringan'");
            $jmlDemamRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT demam FROM naive_bayes WHERE demam = '$G001' && status_pasien = 'sedang'");
            $jmlDemamSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT demam FROM naive_bayes WHERE demam = '$G001' && status_pasien = 'berat'");
            $jmlDemamBerat = mysqli_num_rows($sql);


            $jmlPDemamRingan = $jmlDemamRingan / $jmlRingan;
            $jmlPDemamSedang = $jmlDemamSedang / $jmlSedang;
            $jmlPDemamBerat = $jmlDemamBerat / $jmlBerat;

            // Probabilitas P(lemas | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT lemas FROM naive_bayes WHERE lemas = '$G002' && status_pasien = 'ringan'");
            $jmllemasRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT lemas FROM naive_bayes WHERE lemas = '$G002' && status_pasien = 'sedang'");
            $jmllemasSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT lemas FROM naive_bayes WHERE lemas = '$G002' && status_pasien = 'berat'");
            $jmllemasBerat = mysqli_num_rows($sql);


            $jmlPlemasRingan = $jmllemasRingan / $jmlRingan;
            $jmlPlemasSedang = $jmllemasSedang / $jmlSedang;
            $jmlPlemasBerat = $jmllemasBerat / $jmlBerat;

            // Probabilitas P(batuk_kering | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT batuk_kering FROM naive_bayes WHERE batuk_kering = '$G003' && status_pasien = 'ringan'");
            $jmlbatuk_keringRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT batuk_kering FROM naive_bayes WHERE batuk_kering = '$G003' && status_pasien = 'sedang'");
            $jmlbatuk_keringSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT batuk_kering FROM naive_bayes WHERE batuk_kering = '$G003' && status_pasien = 'berat'");
            $jmlbatuk_keringBerat = mysqli_num_rows($sql);


            $jmlPbatuk_keringRingan = $jmlbatuk_keringRingan / $jmlRingan;
            $jmlPbatuk_keringSedang = $jmlbatuk_keringSedang / $jmlSedang;
            $jmlPbatuk_keringBerat = $jmlbatuk_keringBerat / $jmlBerat;

            // Probabilitas P(flu | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT flu FROM naive_bayes WHERE flu = '$G004' && status_pasien = 'ringan'");
            $jmlfluRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT flu FROM naive_bayes WHERE flu = '$G004' && status_pasien = 'sedang'");
            $jmlfluSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT flu FROM naive_bayes WHERE flu = '$G004' && status_pasien = 'berat'");
            $jmlfluBerat = mysqli_num_rows($sql);


            $jmlPfluRingan = $jmlfluRingan / $jmlRingan;
            $jmlPfluSedang = $jmlfluSedang / $jmlSedang;
            $jmlPfluBerat = $jmlfluBerat / $jmlBerat;

            // Probabilitas P(diare | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT diare FROM naive_bayes WHERE diare = '$G005' && status_pasien = 'ringan'");
            $jmldiareRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT diare FROM naive_bayes WHERE diare = '$G005' && status_pasien = 'sedang'");
            $jmldiareSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT diare FROM naive_bayes WHERE diare = '$G005' && status_pasien = 'berat'");
            $jmldiareBerat = mysqli_num_rows($sql);


            $jmlPdiareRingan = $jmldiareRingan / $jmlRingan;
            $jmlPdiareSedang = $jmldiareSedang / $jmlSedang;
            $jmlPdiareBerat = $jmldiareBerat / $jmlBerat;

            // Probabilitas P(nyeri | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT nyeri FROM naive_bayes WHERE nyeri = '$G006' && status_pasien = 'ringan'");
            $jmlnyeriRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT nyeri FROM naive_bayes WHERE nyeri = '$G006' && status_pasien = 'sedang'");
            $jmlnyeriSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT nyeri FROM naive_bayes WHERE nyeri = '$G006' && status_pasien = 'berat'");
            $jmlnyeriBerat = mysqli_num_rows($sql);


            $jmlPnyeriRingan = $jmlnyeriRingan / $jmlRingan;
            $jmlPnyeriSedang = $jmlnyeriSedang / $jmlSedang;
            $jmlPnyeriBerat = $jmlnyeriBerat / $jmlBerat;

            // Probabilitas P(muntah | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT muntah FROM naive_bayes WHERE muntah = '$G007' && status_pasien = 'ringan'");
            $jmlmuntahRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT muntah FROM naive_bayes WHERE muntah = '$G007' && status_pasien = 'sedang'");
            $jmlmuntahSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT muntah FROM naive_bayes WHERE muntah = '$G007' && status_pasien = 'berat'");
            $jmlmuntahBerat = mysqli_num_rows($sql);


            $jmlPmuntahRingan = $jmlmuntahRingan / $jmlRingan;
            $jmlPmuntahSedang = $jmlmuntahSedang / $jmlSedang;
            $jmlPmuntahBerat = $jmlmuntahBerat / $jmlBerat;

            // Probabilitas P(batuk_berdahak | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT batuk_berdahak FROM naive_bayes WHERE batuk_berdahak = '$G008' && status_pasien = 'ringan'");
            $jmlbatuk_berdahakRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT batuk_berdahak FROM naive_bayes WHERE batuk_berdahak = '$G008' && status_pasien = 'sedang'");
            $jmlbatuk_berdahakSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT batuk_berdahak FROM naive_bayes WHERE batuk_berdahak = '$G008' && status_pasien = 'berat'");
            $jmlbatuk_berdahakBerat = mysqli_num_rows($sql);


            $jmlPbatuk_berdahakRingan = $jmlbatuk_berdahakRingan / $jmlRingan;
            $jmlPbatuk_berdahakSedang = $jmlbatuk_berdahakSedang / $jmlSedang;
            $jmlPbatuk_berdahakBerat = $jmlbatuk_berdahakBerat / $jmlBerat;

            // Probabilitas P(pusing | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT pusing FROM naive_bayes WHERE pusing = '$G009' && status_pasien = 'ringan'");
            $jmlpusingRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT pusing FROM naive_bayes WHERE pusing = '$G009' && status_pasien = 'sedang'");
            $jmlpusingSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT pusing FROM naive_bayes WHERE pusing = '$G009' && status_pasien = 'berat'");
            $jmlpusingBerat = mysqli_num_rows($sql);


            $jmlPpusingRingan = $jmlpusingRingan / $jmlRingan;
            $jmlPpusingSedang = $jmlpusingSedang / $jmlSedang;
            $jmlPpusingBerat = $jmlpusingBerat / $jmlBerat;

            // Probabilitas P(gangguan | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT gangguan FROM naive_bayes WHERE gangguan = '$G010' && status_pasien = 'ringan'");
            $jmlgangguanRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT gangguan FROM naive_bayes WHERE gangguan = '$G010' && status_pasien = 'sedang'");
            $jmlgangguanSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT gangguan FROM naive_bayes WHERE gangguan = '$G010' && status_pasien = 'berat'");
            $jmlgangguanBerat = mysqli_num_rows($sql);


            $jmlPgangguanRingan = $jmlgangguanRingan / $jmlRingan;
            $jmlPgangguanSedang = $jmlgangguanSedang / $jmlSedang;
            $jmlPgangguanBerat = $jmlgangguanBerat / $jmlBerat;

            // Probabilitas P(mual | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT mual FROM naive_bayes WHERE mual = '$G011' && status_pasien = 'ringan'");
            $jmlmualRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT mual FROM naive_bayes WHERE mual = '$G011' && status_pasien = 'sedang'");
            $jmlmualSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT mual FROM naive_bayes WHERE mual = '$G011' && status_pasien = 'berat'");
            $jmlmualBerat = mysqli_num_rows($sql);


            $jmlPmualRingan = $jmlmualRingan / $jmlRingan;
            $jmlPmualSedang = $jmlmualSedang / $jmlSedang;
            $jmlPmualBerat = $jmlmualBerat / $jmlBerat;

            // Probabilitas P(hilang_rasa | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT hilang_rasa FROM naive_bayes WHERE hilang_rasa = '$G012' && status_pasien = 'ringan'");
            $jmlhilang_rasaRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT hilang_rasa FROM naive_bayes WHERE hilang_rasa = '$G012' && status_pasien = 'sedang'");
            $jmlhilang_rasaSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT hilang_rasa FROM naive_bayes WHERE hilang_rasa = '$G012' && status_pasien = 'berat'");
            $jmlhilang_rasaBerat = mysqli_num_rows($sql);


            $jmlPhilang_rasaRingan = $jmlhilang_rasaRingan / $jmlRingan;
            $jmlPhilang_rasaSedang = $jmlhilang_rasaSedang / $jmlSedang;
            $jmlPhilang_rasaBerat = $jmlhilang_rasaBerat / $jmlBerat;

            // Probabilitas P(kejang | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT kejang FROM naive_bayes WHERE kejang = '$G013' && status_pasien = 'ringan'");
            $jmlkejangRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT kejang FROM naive_bayes WHERE kejang = '$G013' && status_pasien = 'sedang'");
            $jmlkejangSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT kejang FROM naive_bayes WHERE kejang = '$G013' && status_pasien = 'berat'");
            $jmlkejangBerat = mysqli_num_rows($sql);


            $jmlPkejangRingan = $jmlkejangRingan / $jmlRingan;
            $jmlPkejangSedang = $jmlkejangSedang / $jmlSedang;
            $jmlPkejangBerat = $jmlkejangBerat / $jmlBerat;

            // Probabilitas P(pingsan | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT pingsan FROM naive_bayes WHERE pingsan = '$G014' && status_pasien = 'ringan'");
            $jmlpingsanRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT pingsan FROM naive_bayes WHERE pingsan = '$G014' && status_pasien = 'sedang'");
            $jmlpingsanSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT pingsan FROM naive_bayes WHERE pingsan = '$G014' && status_pasien = 'berat'");
            $jmlpingsanBerat = mysqli_num_rows($sql);


            $jmlPpingsanRingan = $jmlpingsanRingan / $jmlRingan;
            $jmlPpingsanSedang = $jmlpingsanSedang / $jmlSedang;
            $jmlPpingsanBerat = $jmlpingsanBerat / $jmlBerat;

            // Probabilitas P(hilang_penciuman | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT hilang_penciuman FROM naive_bayes WHERE hilang_penciuman = '$G015' && status_pasien = 'ringan'");
            $jmlhilang_penciumanRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT hilang_penciuman FROM naive_bayes WHERE hilang_penciuman = '$G015' && status_pasien = 'sedang'");
            $jmlhilang_penciumanSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT hilang_penciuman FROM naive_bayes WHERE hilang_penciuman = '$G015' && status_pasien = 'berat'");
            $jmlhilang_penciumanBerat = mysqli_num_rows($sql);

            $jmlPhilang_penciumanRingan = $jmlhilang_penciumanRingan / $jmlRingan;
            $jmlPhilang_penciumanSedang = $jmlhilang_penciumanSedang / $jmlSedang;
            $jmlPhilang_penciumanBerat = $jmlhilang_penciumanBerat / $jmlBerat;

            // Probabilitas P(kontak_erat | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT kontak_erat FROM naive_bayes WHERE kontak_erat = '$G016' && status_pasien = 'ringan'");
            $jmlkontak_eratRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT kontak_erat FROM naive_bayes WHERE kontak_erat = '$G016' && status_pasien = 'sedang'");
            $jmlkontak_eratSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT kontak_erat FROM naive_bayes WHERE kontak_erat = '$G016' && status_pasien = 'berat'");
            $jmlkontak_eratBerat = mysqli_num_rows($sql);


            $jmlPkontak_eratRingan = $jmlkontak_eratRingan / $jmlRingan;
            $jmlPkontak_eratSedang = $jmlkontak_eratSedang / $jmlSedang;
            $jmlPkontak_eratBerat = $jmlkontak_eratBerat / $jmlBerat;

            // Probabilitas P(luar_daerah | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT luar_daerah FROM naive_bayes WHERE luar_daerah = '$G017' && status_pasien = 'ringan'");
            $jmlluar_daerahRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT luar_daerah FROM naive_bayes WHERE luar_daerah = '$G017' && status_pasien = 'sedang'");
            $jmlluar_daerahSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT luar_daerah FROM naive_bayes WHERE luar_daerah = '$G017' && status_pasien = 'berat'");
            $jmlluar_daerahBerat = mysqli_num_rows($sql);

            $jmlPluar_daerahRingan = $jmlluar_daerahRingan / $jmlRingan;
            $jmlPluar_daerahSedang = $jmlluar_daerahSedang / $jmlSedang;
            $jmlPluar_daerahBerat = $jmlluar_daerahBerat / $jmlBerat;

            // Probabilitas P(swab_pcr | Jenis Klasifikasi)

            $sql =  mysqli_query($db, "SELECT swab_pcr FROM naive_bayes WHERE swab_pcr = '$G018' && status_pasien = 'ringan'");
            $jmlswab_pcrRingan = mysqli_num_rows($sql);
            
            $sql =  mysqli_query($db, "SELECT swab_pcr FROM naive_bayes WHERE swab_pcr = '$G018' && status_pasien = 'sedang'");
            $jmlswab_pcrSedang = mysqli_num_rows($sql);

           $sql =  mysqli_query($db, "SELECT swab_pcr FROM naive_bayes WHERE swab_pcr = '$G018' && status_pasien = 'berat'");
            $jmlswab_pcrBerat = mysqli_num_rows($sql);

            $jmlPswab_pcrRingan = $jmlswab_pcrRingan / $jmlRingan;
            $jmlPswab_pcrSedang = $jmlswab_pcrSedang / $jmlSedang;
            $jmlPswab_pcrBerat = $jmlswab_pcrBerat / $jmlBerat;


            // 3. Menghitung posterior probabilities P(X|Ci)
              $posRingan = $jmlPDemamRingan * $jmlPlemasRingan * $jmlPbatuk_keringRingan * 
               $jmlPfluRingan * $jmlPdiareRingan * $jmlPnyeriRingan * $jmlPmuntahRingan*
               $jmlPbatuk_berdahakRingan * $jmlPpusingRingan * $jmlPgangguanRingan * $jmlPmualRingan *
               $jmlPhilang_rasaRingan* $jmlPkejangRingan * $jmlPpingsanRingan * 
               $jmlPhilang_penciumanRingan * $jmlPkontak_eratRingan * $jmlPluar_daerahRingan*
               $jmlPswab_pcrRingan;


             $posSedang = $jmlPDemamSedang * $jmlPlemasSedang * $jmlPbatuk_keringSedang * 
             $jmlPfluSedang * $jmlPdiareSedang * $jmlPnyeriSedang * $jmlPmuntahSedang*
             $jmlPbatuk_berdahakSedang*$jmlPpusingSedang*$jmlPgangguanSedang*$jmlPmualSedang*
             $jmlPhilang_rasaSedang*$jmlPkejangSedang*$jmlPpingsanSedang*$jmlPhilang_penciumanSedang*
             $jmlPkontak_eratSedang*$jmlPluar_daerahSedang* $jmlPswab_pcrSedang;

             $posBerat = $jmlPDemamBerat * $jmlPlemasBerat * $jmlPbatuk_keringBerat * $jmlPfluBerat * $jmlPdiareBerat * $jmlPnyeriBerat * $jmlPmuntahBerat*$jmlPbatuk_berdahakBerat*$jmlPpusingBerat*$jmlPgangguanBerat*$jmlPmualBerat*$jmlPhilang_rasaBerat*$jmlPkejangBerat*$jmlPpingsanBerat*$jmlPhilang_penciumanBerat*$jmlPkontak_eratBerat*$jmlPluar_daerahBerat* $jmlPswab_pcrBerat;

             // 4. menghitung posterior probabilities P(Ci|X)
            $pCRingan =  $posRingan *  $pKlasRingan;
            $pCSedang =  $posSedang *  $pKlasSedang;
            $pCBerat =  $posBerat *  $pKlasBerat;
    
    }
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
<section>
<!-- ISI DI DISINI-->

<?php

if ($G001 == "ya" && $G002 == "tidak" && $G003 == "ya" && $G004 == "ya" && $G005 == "tidak" && $G006 == "ya" && $G007 == "tidak" && $G008 == "tidak" && $G009 == "ya" && $G010 == "tidak" && $G011 == "tidak" && $G012 == "tidak" && $G013 == "tidak" && $G014 == "tidak" && $G015 == "tidak" && $G016 == "ya" && $G017 == "ya" && $G018 == "tidak") {
?>        

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                 <ul class="list-unstyled"></ul>
                                <h4 class="center"> Anda Merupakan Pasien COVID-19 Dengan Gejala Ringan </h4><br></div>
                                <h6 class="text-center">
                           Pasien dengan gejala ringan juga seringkali menderita gejala flu dan merasa mudah lelah serta sakit kepala. Ciri khas dari gejala infeksi ringan adalah tidak adanya sesak napas atau gangguan pernapasan berat.  Gejala-gejala ini pun biasanya mereda dengan sendirinya dalam waktu 7-10 hari.
                            Pada prinsipnya pasien terkonfirmasi COVID-19 yang
                            mengalami sakit ringan sama dengan pasien terkonfirmasi yang tanpa gejala.
                           Anda akan mengalami gejala-gejala berikut berdasarkan ketentuan yang telah disusun oleh pakar.
                                </ul></h6><br>

                                <ul style="color: black;" >
                                <table class="table table-hover table-bordered" id="sampleTable" width="80%" style="color: black;">
           <thead>
              <tr>
                <th><center>No</center></th>
                <th><center>Gejala Yang Dialami Sesuai Rule Pakar</center></th>
                <th><center>Id Gejala</center></th>
                <th><center> Keterangan</center></th>
                </tr>
            </thead>
            <tbody>
              <tr>
                  <td>1.</td>
                  <td>Anda Mengalami Demam Dalam 7 Hari Terakhir</td>
                  <td>G001</td>
                  <td>Ya</td>

              </tr>
              <tr>
                  <td>2.</td>
                  <td>Anda Mengalami Lemas atau kelelahan ringan Dalam 7 Hari Terakhir</td>
                  <td>G002</td>
                  <td>Tidak</td>
              </tr>
              <tr>
                  <td>3.</td>
                  <td>Anda Mengalami Batuk Kering Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G003</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>4.</td>
                  <td>Anda Mengalami FLU atau Hidung Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G004</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>5.</td>
                  <td>Anda Mengalami Diare Dalam 7 Hari Terakhir</td>
                  <td>G005</td>
                  <td>Tidak</td>
              </tr>
              <tr>
                  <td>6.</td>
                  <td>Anda Mengalami Nyeri Pada Bagian Tubuh (Seperti Nyeri Tenggorokan, Nyeri Otot, Nyeri Tulang, dan Nyeri Perut) Dalam 7 Hari Terakhir</td>
                  <td>G006</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>7.</td>
                  <td>Anda Mengalami Muntah Kepala Dalam 7 Hari Terakhir</td>
                  <td>G007</td>
                  <td>Tidak</td>
              </tr>
              <tr>
                  <td>8.</td>
                  <td>Anda Mengalami Batuk Berdahak Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G008</td>
                  <td>Tidak</td>
              <tr>
                  <td>9.</td>
                  <td>Anda Mengalami Pusing atau Sakit Kepala Dalam 7 Hari Terakhir</td>
                  <td>G009</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>10.</td>
                  <td>Anda Mengalami Gangguan Pernafasan(Seperti Sesak Nafas,Nafas cepat atau Nafas lambat) Kepala Dalam 7 Hari Terakhir</td>
                  <td>G010</td>
                  <td>Tidak</td>
              </tr>
              <tr>
                  <td>11.</td>
                  <td>Anda Mengalami Mual Dalam 7 Hari Terakhir</td>
                  <td>G011</td>
                  <td>Tidak</td>
              </tr>
              <tr>
                  <td>12.</td>
                  <td>Anda Mengalami Hilangnya Kemampuan Pengecap Rasa Dalam 7 Hari Terakhir</td>
                  <td>G012</td>
                  <td>Tidak</td>
              <tr>
                  <td>13.</td>
                  <td>Anda Mengalami Kejang Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G013</td>
                  <td>Tidak</td>
              </tr>
              <tr>
                  <td>14.</td>
                  <td>Anda Mengalami Penurunan Kesadaran atau Pingsan Dalam 7 Hari Terakhir</td>
                  <td>G014</td>
                  <td>Tidak</td>
              </tr>
              <tr>
                  <td>15.</td>
                  <td>Anda Mengalami Hilangnya Kemampuan Penciuman Rasa Dalam 7 Hari Terakhir</td>
                  <td>G015</td>
                  <td>Tidak</td>
                 <tr>
                  <td>16.</td>
                  <td>Apakah anda memiliki riwayat kontak erat dengan Pasien Covid-19 dalam 7 hari terakhir?</td>
                  <td>G016</td>
                  <td>Ya</td>
                
              </tr>
               <tr>
                  <td>17.</td>
                  <td>Apakah anda melakukan perjalanan keluar daerah baik didalam maupun keluar negeri dalam 7 hari terakhir?</td>
                  <td>G017</td>
                  <td>Ya</td>
                 
              </tr>
               <tr>
                  <td>18.</td>
                  <td>Apakah anda sudah melakukan Swab tes atau Rapid Test dengan Hasil test positif?</td>
                  <td>G018</td>
                  <td>Tidak</td>
                 
              </tr>

              </tr>
            </tbody>
        </table>
<h5 class="text-center">Solusi</h5>
                            <ul style="color: black;" > <h6 class="text-center">
                           Menurut Keputusan Menteri Kesehatan (KMK) Nomor HK.01.07/MENKES/413/2020 
                              <li style="color: black;">
                                  1. Dilakukan isolasi sesuai dengan kriteria  Pada kasus gejala ringan. 
                                  <li style="color: black;">2. Tidak perlu dilakukan follow up pemeriksaan RT-PCR.</li>
                                    <li style="color: black;">3. Pemantauan dilakukan berkala selama belum dinyatakan selesai isolasi.</li>
                                        <li style="color: black;">4. Petugas kesehatan memberikan komunikasi risiko pada kasus termasuk kontak eratnya berupa informasi mengenai Covid-19, pencegahan penularan, tata laksana lanjut jika terjadi perburukan, dan lainnya.</li>
                                            <li style="color: black;">5. Penyelidikan epidemiologi pada kasus konfirmasi juga termasuk dalam mengidentifikasi kontak erat. </li>
                                                <li style="color: black;">6. Pasien gejala ringan dinyatakan selesai isolasi harus dihitung 10 hari sejak tanggal onset dengan ditambah minimal 3 hari setelah tidak lagi menunjukkan gejala demam dan gangguan pernapasan.</li><br> 

                           <ul style="color: black;" > <h6 class="text-center">
                           Cek Juga Hasil Validasi berdasarkan Data Pasien sebelumnya kamu Memenuhi kategori Pasien apa ya! Setelah Memperoleh Hasil , Selengkapnya silahkan kunjungi halaman buku panduan!</ul></h6>
<?php
    }
    else if ($G001 == "ya" && $G002 == "ya" && $G003 == "ya" && $G004 == "ya" && $G005 == "ya" && $G006 == "ya" && $G007 == "ya" && $G008 == "tidak" && $G009 == "ya" && $G010 == "ya" && $G011 == "ya" && $G012 == "ya" && $G013 == "tidak" && $G014 == "tidak" && $G015 == "tidak" && $G016 == "ya" && $G017 == "ya" && $G018 == "ya") { ?>

              
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                 <ul class="list-unstyled"></ul>
                                <h4 class="center"> Anda Merupakan Pasien COVID-19 Dengan Gejala Sedang </h4><br></div>
                                 <ul style="color: black;" > <h6 class="text-center"> 
                                 Penderita gejala sedang mungkin masih mampu melakukan berbagai aktivitas, tetapi tubuh mudah merasa lemas.  Gejala ini biasanya berlangsung lebih lama dari gejala ringan, yaitu sekitar 7-14 hari. Tidak hanya itu berikut merupakan beberapa gejala umum yang dialami oleh pasien dengan status sedang yang disusun oleh pakar.</ul></h6>
                                <ul style="color: black;" >
                                <table class="table table-hover table-bordered" id="sampleTable" width="80%" style="color: black;">
           <thead>
              <tr>
                <th><center>No</center></th>
                <th><center>Gejala Yang Dialami Sesuai Rule Pakar</center></th>
                <th><center>Id Gejala</center></th>
                <th><center> Keterangan</center></th>
                </tr>
            </thead>
            <tbody>
              <tr>
                  <td>1.</td>
                  <td>Anda Mengalami Demam Dalam 7 Hari Terakhir</td>
                  <td>G001</td>
                  <td>Ya</td>

              </tr>
              <tr>
                  <td>2.</td>
                  <td>Anda Mengalami Lemas atau kelelahan ringan Dalam 7 Hari Terakhir</td>
                  <td>G002</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>3.</td>
                  <td>Anda Mengalami Batuk Kering Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G003</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>4.</td>
                  <td>Anda Mengalami FLU atau Hidung Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G004</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>5.</td>
                  <td>Anda Mengalami Diare Dalam 7 Hari Terakhir</td>
                  <td>G005</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>6.</td>
                  <td>Anda Mengalami Nyeri Pada Bagian Tubuh (Seperti Nyeri Tenggorokan, Nyeri Otot, Nyeri Tulang, dan Nyeri Perut) Dalam 7 Hari Terakhir</td>
                  <td>G006</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>7.</td>
                  <td>Anda Mengalami Muntah Kepala Dalam 7 Hari Terakhir</td>
                  <td>G007</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>8.</td>
                  <td>Anda Mengalami Batuk Berdahak Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G008</td>
                  <td>Tidak</td>
              <tr>
                  <td>9.</td>
                  <td>Anda Mengalami Pusing atau Sakit Kepala Dalam 7 Hari Terakhir</td>
                  <td>G009</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>10.</td>
                  <td>Anda Mengalami Gangguan Pernafasan(Seperti Sesak Nafas,Nafas cepat atau Nafas lambat) Kepala Dalam 7 Hari Terakhir</td>
                  <td>G010</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>11.</td>
                  <td>Anda Mengalami Mual Dalam 7 Hari Terakhir</td>
                  <td>G011</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>12.</td>
                  <td>Anda Mengalami Hilangnya Kemampuan Pengecap Rasa Dalam 7 Hari Terakhir</td>
                  <td>G012</td>
                  <td>Ya</td>
              <tr>
                  <td>13.</td>
                  <td>Anda Mengalami Kejang Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G013</td>
                  <td>Tidak</td>
              </tr>
              <tr>
                  <td>14.</td>
                  <td>Anda Mengalami Penurunan Kesadaran atau Pingsan Dalam 7 Hari Terakhir</td>
                  <td>G014</td>
                  <td>Tidak</td>
              </tr>
              <tr>
                  <td>15.</td>
                  <td>Anda Mengalami Hilangnya Kemampuan Penciuman Rasa Dalam 7 Hari Terakhir</td>
                  <td>G015</td>
                  <td>Tidak</td>                  
              </tr>
              <td>16.</td>
                  <td>Apakah anda memiliki riwayat kontak erat dengan Pasien Covid-19 dalam 7 hari terakhir?</td>
                  <td>G016</td>
                  <td>Ya</td>
                
              </tr>
               <tr>
                  <td>17.</td>
                  <td>Apakah anda melakukan perjalanan keluar daerah baik didalam maupun keluar negeri dalam 7 hari terakhir?</td>
                  <td>G017</td>
                  <td>Ya</td>
                 
              </tr>
               <tr>
                  <td>18.</td>
                  <td>Apakah anda sudah melakukan Swab tes atau Rapid Test dengan Hasil test positif?</td>
                  <td>G018</td>
                  <td>Ya</td>
            </tbody>
        </table>
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
                           Cek Juga Hasil Validasi berdasarkan Data Pasien sebelumnya kamu Memenuhi kategori Pasien apa ya! Setelah Memperoleh Hasil , Selengkapnya silahkan kunjungi halaman buku panduan!</ul></h6>
<?php }

    else if ($G001 == "ya" && $G002 == "ya" && $G003 == "ya" && $G004 == "ya" && $G005 == "ya" && $G006 == "ya" && $G007 == "ya" && $G008 == "ya" && $G009 == "ya" && $G010 == "ya" && $G011 == "ya" && $G012 == "ya" && $G013 == "ya" && $G014 == "ya" && $G015 == "ya" && $G016 == "ya" && $G017 == "ya" && $G018 == "ya") { ?>

               
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                 <ul class="list-unstyled"></ul>
                                <h4 class="center"> Anda Merupakan Pasien COVID-19 Dengan Gejala Berat </h4><br></div>
                                <ul style="color: black;"> <h6 class="text-center">
                                  Pasien dengan gejala berat merupakan pasien yang membutuhkan penangan Khusus Tim Medis dikarenakan pasien dengan status berat kan mengalami hampir seluruh gejala umum pasien terkonfirmasi Covid-19.Pada pasien Covid-19 kritis, beberapa gejala Covid-19 berat di atas disertai gangguan pernapasan berat (ARDS), sepsis atau komplikasi infeksi, dan gagal organ.Berikut merupakan gejala kompleks yang telah disusun oleh pakar.</h6></ul><br>

<ul style="color: black;" >
                                <table class="table table-hover table-bordered" id="sampleTable" width="80%" style="color: black;">
           <thead>
              <tr>
                <th><center>No</center></th>
                <th><center>Gejala Yang Dialami Sesuai Rule Pakar</center></th>
                <th><center>Id Gejala</center></th>
                <th><center> Keterangan</center></th>
                </tr>
            </thead>
            <tbody>
              <tr>
                  <td>1.</td>
                  <td>Anda Mengalami Demam Dalam 7 Hari Terakhir</td>
                  <td>G001</td>
                  <td>Ya</td>

              </tr>
              <tr>
                  <td>2.</td>
                  <td>Anda Mengalami Lemas atau kelelahan ringan Dalam 7 Hari Terakhir</td>
                  <td>G002</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>3.</td>
                  <td>Anda Mengalami Batuk Kering Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G003</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>4.</td>
                  <td>Anda Mengalami FLU atau Hidung Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G004</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>5.</td>
                  <td>Anda Mengalami Diare Dalam 7 Hari Terakhir</td>
                  <td>G005</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>6.</td>
                  <td>Anda Mengalami Nyeri Pada Bagian Tubuh (Seperti Nyeri Tenggorokan, Nyeri Otot, Nyeri Tulang, dan Nyeri Perut) Dalam 7 Hari Terakhir</td>
                  <td>G006</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>7.</td>
                  <td>Anda Mengalami Muntah Kepala Dalam 7 Hari Terakhir</td>
                  <td>G007</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>8.</td>
                  <td>Anda Mengalami Batuk Berdahak Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G008</td>
                  <td>Ya</td>
              <tr>
                  <td>9.</td>
                  <td>Anda Mengalami Pusing atau Sakit Kepala Dalam 7 Hari Terakhir</td>
                  <td>G009</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>10.</td>
                  <td>Anda Mengalami Gangguan Pernafasan(Seperti Sesak Nafas,Nafas cepat atau Nafas lambat) Kepala Dalam 7 Hari Terakhir</td>
                  <td>G010</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>11.</td>
                  <td>Anda Mengalami Mual Dalam 7 Hari Terakhir</td>
                  <td>G011</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>12.</td>
                  <td>Anda Mengalami Hilangnya Kemampuan Pengecap Rasa Dalam 7 Hari Terakhir</td>
                  <td>G012</td>
                  <td>Ya</td>
              <tr>
                  <td>13.</td>
                  <td>Anda Mengalami Kejang Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G013</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>14.</td>
                  <td>Anda Mengalami Penurunan Kesadaran atau Pingsan Dalam 7 Hari Terakhir</td>
                  <td>G014</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>15.</td>
                  <td>Anda Mengalami Hilangnya Kemampuan Penciuman Rasa Dalam 7 Hari Terakhir</td>
                  <td>G015</td>
                  <td>Ya</td>
              </tr>
              <td>16.</td>
                  <td>Apakah anda memiliki riwayat kontak erat dengan Pasien Covid-19 dalam 7 hari terakhir?</td>
                  <td>G016</td>
                  <td>Ya</td>
                
              </tr>
               <tr>
                  <td>17.</td>
                  <td>Apakah anda melakukan perjalanan keluar daerah baik didalam maupun keluar negeri dalam 7 hari terakhir?</td>
                  <td>G017</td>
                  <td>Ya</td>
                 
              </tr>
               <tr>
                  <td>18.</td>
                  <td>Apakah anda sudah melakukan Swab tes atau Rapid Test dengan Hasil test positif?</td>
                  <td>G018</td>
                  <td>Ya</td>
            </tbody>
        </table>
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

        <?php } else{ ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                 <ul class="list-unstyled"></ul>
                                <h4 class="center"> Anda Bukan Merupakan Pasien COVID-19 </h4><br></div>
                           <ul style="color: black;"> <h6 class="text-center">
                                  Berdasarkan rule atau ketentuan yang telah disusun oleh ahli yang menjadi pakar dalam pembuatan sistem ini, ANDA BUKAN MERUPAKAN PASIEN COVID-19 dikarenakan gejala-gejala yang anda pilih tidak memenuhi kriteria Pasien Covid-19.Berikut merupakan gejala kompleks yang telah disusun oleh pakar. </h6></ul><br>

                                <div class="table-responsive">
                                   <div class="row">

          <table class="table table-hover table-bordered" id="sampleTable" width="80%" style="color: black;">
            <thead>
              <tr>
                <th><center>No</center></th>
                <th><center>Gejala Berdasakan Ketentuan Pakar</center></th>
                <th><center>Id Gejala</center>
                <th><center>Ringan</center>
                <th><center>Sedang</center>
                <th><center>Berat</center>   
                </tr>
            </thead>
            <tbody>
              <tr>
                  <td>1.</td>
                  <td>Anda Mengalami Demam Dalam 7 Hari Terakhir</td>
                  <td>G001</td>
                  <td>Ya</td>
                  <td>Ya</td>
                  <td>Ya</td>

              </tr>
              <tr>
                  <td>2.</td>
                  <td>Anda Mengalami Lemas atau kelelahan ringan Dalam 7 Hari Terakhir</td>
                  <td>G002</td>
                  <td>Tidak</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>3.</td>
                  <td>Anda Mengalami Batuk Kering Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G003</td>
                  <td>Ya</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>4.</td>
                  <td>Anda Mengalami FLU atau Hidung Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G004</td>
                  <td>Ya</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>5.</td>
                  <td>Anda Mengalami Diare Dalam 7 Hari Terakhir</td>
                  <td>G005</td>
                  <td>Tidak</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>6.</td>
                  <td>Anda Mengalami Nyeri Pada Bagian Tubuh (Seperti Nyeri Tenggorokan, Nyeri Otot, Nyeri Tulang, dan Nyeri Perut) Dalam 7 Hari Terakhir</td>
                  <td>G006</td>
                  <td>Ya</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>7.</td>
                  <td>Anda Mengalami Muntah Kepala Dalam 7 Hari Terakhir</td>
                  <td>G007</td>
                  <td>Tidak</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>8.</td>
                  <td>Anda Mengalami Batuk Berdahak Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G008</td>
                  <td>Tidak</td>
                  <td>Tidak</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>9.</td>
                  <td>Anda Mengalami Pusing atau Sakit Kepala Dalam 7 Hari Terakhir</td>
                  <td>G009</td>
                  <td>Ya</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>10.</td>
                  <td>Anda Mengalami Gangguan Pernafasan(Seperti Sesak Nafas,Nafas cepat atau Nafas lambat) Kepala Dalam 7 Hari Terakhir</td>
                  <td>G010</td>
                  <td>Tidak</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>11.</td>
                  <td>Anda Mengalami Mual Dalam 7 Hari Terakhir</td>
                  <td>G011</td>
                  <td>Tidak</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>12.</td>
                  <td>Anda Mengalami Hilangnya Kemampuan Pengecap Rasa Dalam 7 Hari Terakhir</td>
                  <td>G012</td>
                  <td>Tidak</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>13.</td>
                  <td>Anda Mengalami Kejang Tersumbat Dalam 7 Hari Terakhir</td>
                  <td>G013</td>
                  <td>Tidak</td>
                  <td>Tidak</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>14.</td>
                  <td>Anda Mengalami Penurunan Kesadaran atau Pingsan Dalam 7 Hari Terakhir</td>
                  <td>G014</td>
                  <td>Tidak</td>
                  <td>Tidak</td>
                  <td>Ya</td>
              </tr>
              <tr>
                  <td>15.</td>
                  <td>Anda Mengalami Hilangnya Kemampuan Penciuman Rasa Dalam 7 Hari Terakhir</td>
                  <td>G015</td>
                  <td>Tidak</td>
                  <td>Tidak</td>
                  <td>Ya</td>
              </tr>
               <tr>
                  <td>16.</td>
                  <td>Apakah anda memiliki riwayat kontak erat dengan Pasien Covid-19 dalam 7 hari terakhir?</td>
                  <td>G016</td>
                  <td>Ya</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
               <tr>
                  <td>17.</td>
                  <td>Apakah anda melakukan perjalanan keluar daerah baik didalam maupun keluar negeri dalam 7 hari terakhir?</td>
                  <td>G017</td>
                  <td>Ya</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>
               <tr>
                  <td>18.</td>
                  <td>Apakah anda sudah melakukan Swab tes atau Rapid Test dengan Hasil test positif?</td>
                  <td>G018</td>
                  <td>Tidak</td>
                  <td>Ya</td>
                  <td>Ya</td>
              </tr>

            </tbody>
        </table>
     </div>
                     <h5 class="text-center">Solusi</h5>
                                    <ul style="color: black;" > <h6 class="text-center">
                           Meskipun gejala yang anda pilih tidak memenuhi kriteria Pasien COVID-19 berdasarkan pakar, namun anda tetap dapat melihat kriteria anda melalui hasil Validasi berdasarkan data pasien sebelumnya dibawah ini.
                       <li style="color: black;"></li>
    <li style="color: black;"> Setelah Mengetahui status Pasien yang kamu dapatkan berdasarkan Perhitungan Validasi maka segera kunjungi halaman buku panduan untuk mendapatkan solusi penanganan yang tepat terhadap status kamu ya!</li>
                                
        <?php } ?>


<!-- isi stop -->
                            <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="list-unstyled"></ul><tr> 
                               <h4 class="center"> Hasil Validasi Naive Bayes dengan data Pasien Sebelumnya </h4><br></div>
                               <center>
                                <h4 style="color: darkred;">

                            <?php 
                             
                                        if ($pCRingan > $pCSedang && $pCRingan > $pCBerat) {
                echo "<p>Anda Termasuk Pasien Covid dengan Status <b>Gejala Ringan</b> dengan Probabilitas <b>".$pCRingan."</b></p>";
            } else if ($pCSedang > $pCRingan && $pCSedang > $pCBerat) {
                echo "<p>Anda Termasuk Pasien Covid dengan Status <b>Gejala Sedang</b> dengan Probabilitas <b>".$pCSedang."</b></p>";
            } else if ($pCBerat > $pCRingan && $pCBerat > $pCSedang) {
                echo "<p>Anda Termasuk Pasien Covid dengan Status <b>Gejala Berat</b> dengan Probabilitas <b>".$pCBerat."</b></p>";
            }else{
                echo "<p>Error, Anda tidak mengisi Data, Silahkan isi data dengan benar!</p>";
            }
                            ?></h4></th><center>
                               <ul class="list-unstyled"></ul>
                            <ul style="color: black;">
                                Silakahkan kunjungi halaman buku panduan untuk melihat solusi terhadap status yang anda dapatkan !
                            </ul>
                            <a href="panduan.php"><button type="button" class="btn btn-dark" style="width: 50%">Buku Panduan</button></a>
                            <ul style="color: black;"><br>
                                Silahkan pilih Cek Gejala Lagi untuk memilih ulang gejala!
                            </ul>
                            <a href="gejala1.php"><button type="button" class="btn btn-info" style="width: 50%">Cek Gejala</button></a><br>

                            <ul style="color: black;"><br>
                                Untuk mencetak hasil diagnosa anda silahkan pilih cetak hasil !</ul>
                            <a href="hasil.php"><button type="button" class="btn btn-success" style="width: 50%" >Cetak Hasil</button></a></center>


                             <ul style="color: black;"><br>
                                Untuk melihat grafik dan data pasien sebelumnya silahkan pilih Data Pasien!
                            </ul>
                            <a href="metode.php"><button type="button" class="btn btn-secondary" style="width: 50%" >Data Pasien</button></a></center>
                         
                        </div>
                            </div>
                        </div>

                    </div>
            </div>


        </div>

</section>
   



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