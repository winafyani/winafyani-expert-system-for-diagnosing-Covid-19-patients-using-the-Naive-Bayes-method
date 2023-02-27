<?php 
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

            $jmlPswab_pcrhRingan = $jmlswab_pcrRingan / $jmlRingan;
            $jmlPswab_pcrSedang = $jmlswab_pcrSedang / $jmlSedang;
            $jmlPswab_pcrBerat = $jmlswab_pcrBerat / $jmlBerat;


            // 3. Menghitung posterior probabilities P(X|Ci)
               $posRingan = $jmlPDemamRingan * $jmlPlemasRingan * $jmlPbatuk_keringRingan * 
               $jmlPfluRingan * $jmlPdiareRingan * $jmlPnyeriRingan * $jmlPmuntahRingan*
               $jmlPbatuk_berdahakRingan * $jmlPpusingRingan * $jmlPgangguanRingan * $jmlPmualRingan *
               $jmlPhilang_rasaRingan* $jmlPkejangRingan * $jmlPpingsanRingan * 
               $jmlPhilang_penciumanRingan * $jmlPkontak_eratRingan * $jmlPluar_daerahRingan * 
               $jmlPswab_pcrRingan;


             $posSedang = $jmlPDemamSedang * $jmlPlemasSedang * $jmlPbatuk_keringSedang * 
             $jmlPfluSedang * $jmlPdiareSedang * $jmlPnyeriSedang * $jmlPmuntahSedang*
             $jmlPbatuk_berdahakSedang*$jmlPpusingSedang*$jmlPgangguanSedang*$jmlPmualSedang*
             $jmlPhilang_rasaSedang*$jmlPkejangSedang*$jmlPpingsanSedang*$jmlPhilang_penciumanSedang*
             $jmlPkontak_eratSedang*$jmlPluar_daerahSedang*
             $jmlPswab_pcrSedang;

             $posBerat = $jmlPDemamBerat * $jmlPlemasBerat * $jmlPbatuk_keringBerat * $jmlPfluBerat * $jmlPdiareBerat * $jmlPnyeriBerat * $jmlPmuntahBerat*$jmlPbatuk_berdahakBerat*$jmlPpusingBerat*$jmlPgangguanBerat*$jmlPmualBerat*$jmlPhilang_rasaBerat*$jmlPkejangBerat*$jmlPpingsanBerat*$jmlPhilang_penciumanBerat*$jmlPkontak_eratBerat*$jmlPluar_daerahBerat* $jmlPswab_pcrBerat;

             // 4. menghitung posterior probabilities P(Ci|X)
            $pCRingan =  $posRingan *  $pKlasRingan;
            $pCSedang =  $posSedang *  $pKlasSedang;
            $pCBerat =  $posBerat *  $pKlasBerat;

            if ($pCRingan > $pCSedang && $pCRingan > $pCBerat) {
                echo "<p>Berdasarkan Perhitungan Naive Bayes Menggunakan Data Pasien Anda Termasuk Pasien Covid dengan Status <b>Gejala Ringan</b></p>";
            } else if ($pCSedang > $pCRingan && $pCSedang > $pCBerat) {
                echo "<p>Berdasarkan Perhitungan Naive Bayes Menggunakan Data Pasien Anda Termasuk Pasien Covid dengan Status <b>Gejala Sedang</b></p>";
            } else if ($pCBerat > $pCRingan && $pCBerat > $pCSedang) {
                echo "<p>Berdasarkan Perhitungan Naive Bayes Menggunakan Data Pasien Anda Termasuk Pasien Covid dengan Status <b>Gejala Berat</b></p>";
            }
            



	if ($G001 == "ya" && $G002 == "tidak" && $G003 == "ya" && $G004 == "ya" && $G005 == "tidak" && $G006 == "ya" && $G007 == "tidak" && $G008 == "tidak" && $G009 == "ya" && $G010 == "tidak" && $G011 == "tidak" && $G012 == "tidak" && $G013 == "tidak" && $G014 == "tidak" && $G015 == "tidak"  && $G016 == "ya" && $G017 == "ya" && $G018 == "tidak") {
		
		// header('location: gejala_ringan.php');


	}
	else if ($G001 == "ya" && $G002 == "ya" && $G003 == "ya" && $G004 == "ya" && $G005 == "ya" && $G006 == "ya" && $G007 == "ya" && $G008 == "tidak" && $G009 == "ya" && $G010 == "ya" && $G011 == "ya" && $G012 == "tidak" && $G013 == "tidak" && $G014 == "tidak" && $G015 == "tidak" && $G016 == "ya" && $G017 == "ya" && $G018 == "ya") {
		
		// header('location: gejala_sedang.php');
	}

	else if ($G001 == "ya" && $G002 == "ya" && $G003 == "ya" && $G004 == "ya" && $G005 == "ya" && $G006 == "ya" && $G007 == "ya" && $G008 == "ya" && $G009 == "ya" && $G010 == "ya" && $G011 == "ya" && $G012 == "ya" && $G013 == "ya" && $G014 == "ya" && $G015 == "ya" && $G016 == "ya" && $G017 == "ya" && $G018 == "ya") {
		
		// header('location: gejala_berat.php');
	}
	else{
		// header('location: random.php');
	}
	
	}
?>