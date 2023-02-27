<?php
include "koneksi.php";
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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Pasien</a></li>
                        </ol>
                    </div>
                </div>
                <div class="app-title">
                    <div id="chartusia"></div>
                    <div id="chartstatus"></div>
   
   

<!-- ISI DI DISINI-->
<p></p>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script > 
  Highcharts.chart('chartusia', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Kategori Usia Pasien Covid-19 '
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Ringan',
            'Sedang',
            'Berat'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Pasien'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 1
        }
    },
    series: [{
        name: 'Anak',
        data: [8, 6, 4]

    }, {
        name: 'Remaja',
        data: [9, 12, 2]

    }, {
        name: 'Dewasa',
        data: [129, 251,89]
    }]
});

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
});</script>
<p></p>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>

// Build the chart
Highcharts.chart('chartstatus', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah Persentase Status Pasien'
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
        name: '',
        data: [
            { name: 'Ringan', y: 27.2 },
            { name: 'Sedang', y: 53.8 },
            { name: 'Berat', y: 19.0 }
        ]
    }]
});         
</script>
 
                <a href="tambah_excel.php" class="btn btn-sm btn-primary pull-right"><span class="fa fa-plus"></span>Tambah Data</a>
  </div><br>

                                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                 <ul class="list-unstyled"></ul>
                                <h4 class="center">  DATA PASIEN COVID-19 SEBELUMNYA </h4><br></div>
                           <ul style="color: black;"> <h6 class="text-center">
                                    <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="sampleTable"   style="color: black;">
                                        <thead>
                                            <th>No</th>
                                            <th>K1</th>
                                            <th>K2</th>
                                            <th>K3</th>
                                            <th>K4</th>
                                            <th>K5</th>
                                            <th>K6</th>
                                            <th>K7</th>
                                            <th>K8</th>
                                            <th>K9</th>
                                            <th>K10</th>
                                            <th>K11</th>
                                            <th>K12</th>
                                            <th>K13</th>
                                            <th>K14</th>
                                            <th>K15</th>
                                            <th>K16</th>
                                            <th>K17</th>
                                            <th>K18</th>
                                            <th>K19</th>
                                            <th>Status Pasien</th>
                                        </thead>
                                        <tbody>
              <?php
              $no = 1;
              $query = mysqli_query($db,"SELECT * FROM naive_bayes");
              while ($data = mysqli_fetch_array($query)) {
                ?>

                <tr>
                  <td><center><?php echo $no++ ?></center></td>
                  <td><?php echo $data["kategori_usia"] ?></td>
                  <td><?php echo $data["demam"] ?></td>
                  <td><?php echo $data["lemas"] ?></td>
                  <td><?php echo $data["batuk_kering"] ?></td>
                  <td><?php echo $data["flu"] ?></td>
                  <td><?php echo $data["diare"] ?></td>
                  <td><?php echo $data["nyeri"] ?></td>
                  <td><?php echo $data["muntah"] ?></td>
                  <td><?php echo $data["batuk_berdahak"] ?></td>
                  <td><?php echo $data["pusing"] ?></td>
                  <td><?php echo $data["gangguan"] ?></td>
                  <td><?php echo $data["mual"] ?></td>
                  <td><?php echo $data["hilang_rasa"] ?></td>
                  <td><?php echo $data["kejang"] ?></td>
                  <td><?php echo $data["pingsan"] ?></td>
                  <td><?php echo $data["hilang_penciuman"] ?></td>
                  <td><?php echo $data["kontak_erat"] ?></td>
                  <td><?php echo $data["luar_daerah"] ?></td>
                  <td><?php echo $data["swab_pcr"] ?></td>
                  <td><b><?php echo $data["status_pasien"] ?></b></td>
                </tr>
              <?php } ?>

                   
                                        </tbody>
                                </div>
                            </div>
                        </table>
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



