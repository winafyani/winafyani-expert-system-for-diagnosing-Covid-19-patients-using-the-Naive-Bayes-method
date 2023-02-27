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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tentang Sistem</a></li>
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
                                <h4>Tentang Sistem</h4>
                                <ul class="list-unstyled"></ul><br>
                                <ul style="color: black;">
                                Ini merupakan sistem pakar yang dibangun untuk memenuhi syarat kelulusan bagi mahasiswa Prodi Teknik Informatika Fakultas Teknik Universitas Malikussaleh . Sistem ini dibangun dan disusun berdasarkan ilmu pengetahuan pakar untuk mendiagnosa status pasien berdasarkan gejala yang dialami pasien berdasarkan ketentuan pakar serta  dapat memvalidasi klasifikasi status pasien berdasarkan data pasien terdahulu yang telah dinyatakan Positif terpapar Virus Corona atau COVID-1, sehingga dihasilkan informasi yang dibutuhkan oleh penggunanya. 
                                 Sistem ini juga telah melalui Uji Akurasi Pengguna dan Pakar.Berikut akan ditampilkan Tabel Data Uji Oleh Pengguna dan Pakar.
                             </ul></center>

                            <div class="card-body">
                                    <table class="table student-data-table m-t-20">
        
                                    
  <head>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body"><center><ul style="color: black;"> 
                                <h4>UJI AKURASI</h4></center>
                                    <ul class="list-unstyled"></ul><br>
<li style="color: black;"> 1. Pengujian dan Responden </li>
<li style="color: black;">Pengujian yang dilakukan oleh sistem
pakar diagnosis virus corona dilakukan dengan metode black box.Lakukan penghitungan manual dan bandingkan
hasilnya dengan hasil konsultasi sistem. Hasil pengujian menunjukkan bahwa hasil perhitungan manual sama dengan hasil konsultasi sistem.
</li><br>
<li style="color: black;"> Setelah dilakukan uji black box, berdasarkan Diagram berikut, dilakukan uji sistem pakar diagnosa virus corona pada beberapa narasumber. Narasumber terdiri dari 30 orang, berusia antara 15-65 tahun, yaitu kategori anak,remaja, dan dewasa. Dan telah melakukan rapid test dan dinyatakan sebagai Pasien COVID-19.Dari 30 responden diantaranya 8 responden mengalami gejala ringan, 18 mengalami gejala sedang, dan 4 mengalami gejala berat.Digambarkan dalam Grafik berikut :</li></ul>

    
<div class="app-title">
                    <div id="chartuji"></div>
                    
<script src="https://code.highcharts.com/highcharts.js"></script>
<script >
  
              // Radialize the colors
Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

// Build the chart
Highcharts.chart('chartuji', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Grafik Uji Responden'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Share',
        data: [
           
            { name: 'Ringan', y: 8/30 },
            { name: 'Sedang', y: 18/30 },
            { name: 'Berat', y: 4/30 }
        ]
    }]
});
   
</script>
<ul class="list-unstyled"></ul><br>
<li style="color: black;"> 2. Pengujian Kesesuaian Pakar </li>
<li style="color: black;">Diagram berikut menunjukkan bahwa dari30 data uji tersebut dilakukan pengujian validasi dengan cara membandingkan keluaran sistem dengan pendapat pakar. Dari 30 data uji terdapat 6 data uji yang tidak cocok. Sehingga didapatkan tingkat kesesuaian sistem pakar ini sebesar 80 % dan 20 % hasil konsultasi sistem pakar tidak sesuai dengan hasil konsultasi dokter dan tenaga kesehatan masing-masing responden.
</li><br>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Uji', 'Hasil '],
          ['Sesuai',     80/100],
          ['Tidak Sesuai',      20/100],
         
        ]);

        var options = {
          title: 'Diagram Kesesuaian Sistem Pakar'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

<li style="color: black;">Diagram menunjukkan bahwa untuk kasus yang dikonfirmasi, hasil sistem pakar
dan hasil pakar adalah :</li>
<li style="color: black;"> 1. Untuk kasus yang  pasien dengan gejala Ringan berdasarkan pakar adalah 8 sedangkan sistem pakar  juga menghasilkan 8</li>
<li style="color: black;"> 2.  Untuk kasus yang  pasien dengan gejala Sedang berdasarkan pakar adalah 18 sedangkan sistem pakar  juga menghasilkan 15. </li>
<li style="color: black;"> 3.  Untuk kasus yang  pasien dengan gejala Berat berdasarkan pakar adalah 4 sedangkan sistem pakar  juga menghasilkan 1.</li>
</li>
<li style="color: black;">Berikut merupakan digram perbandingan Hasil Pakar dan Sistem</li><br>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'Sistem', 'Ahli Pakar'],
          ['Ringan', 8, 8],
          ['Sedang', 15, 18],
          ['Berat', 1, 4],
          
        ]);

        var options = {
          chart: {
            title: 'Grafik Perbandingan Hasil',
            
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>


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