
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <style type="text/css">
    	.col-print-1 {width:8%;  float:left;}
		.col-print-2 {width:16%; float:left;}
		.col-print-3 {width:25%; float:left;}
		.col-print-4 {width:33%; float:left;}
		.col-print-5 {width:42%; float:left;}
		.col-print-6 {width:50%; float:left;}
		.col-print-7 {width:58%; float:left;}
		.col-print-8 {width:66%; float:left;}
		.col-print-9 {width:75%; float:left;}
		.col-print-10{width:83%; float:left;}
		.col-print-11{width:92%; float:left;}
		.col-print-12{width:100%; float:left;}
		@media print {
  @page { margin: 0; }
  body { margin: 1.6cm; }
}
    </style>
</head>
<body>
    <div class="container">
    	<br>
    	<br>
    	<br>
    	<div class="row">
    		<div class="col-print-8">
	    		&nbsp;
	    	</div>
	    	<div class="col-print-4">
	    		<p>Surabaya, 10 Agustus 2017-08-11 <br> 
	    			Kepada Yth: <br>
	    			HRD <i><?php echo $letter['company_name'] ?></i><br>
	    			Di <br>
	    			<center>Tempat</center>
	    		</p>
	    	</div>
    	</div>
    	<div class="row">
    		<div class="col-print-12">
    			<p>Hal : Lamaran</p>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-print-12">
    			<p>Dengan Hormat</p>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-print-12">
    			<p>&emsp; Berdasarkan informasi dari media cetak, koran terpadu perihal lowongan  pekerjaan di perusahaan tempat Bapak/Ibu pimpin. Melalui surat lamaran ini saya ingin mengajukan diri untuk melamar pekerjaan di perusahaan yang Bapak/Ibu pimpin guna mengisi posisi yang dibutuhkan saat ini. Saya yang bertanda tangan dibawah ini:
    			<br>
    			&emsp;Nama&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $letter['name'] ?> <br>

				&emsp;Tempat / Tanggal lahir&emsp;: -, -<br>

				&emsp;Jenis Kelamin&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: Perempuan<br>

				&emsp;Pendidikkan&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: <?php echo $letter['name'] ?><br>

				&emsp;Alamat&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;	: <?php echo $letter['address'] ?>,<?php echo $letter['kabupaten'] ?>  <?php echo $letter['kecamatan'] ?> - <?php echo $letter['kodepos'] ?><br>
				&emsp;Telepon&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: <?php echo $letter['phone'] ?><br>
				<br>
				&emsp;Untuk melengkapi beberapa data yang diperlukan sebagai bahan pertimbangan Bapak/Ibu pimpinan diwaktu yang akan datang,saya lampirkan juga kelengkapan data diri sebagai berikut:
				<br>

				<ol>
				<?php 
				$req = explode(';', $letter['requirements']);
				foreach ($req as $req) {
					echo "<li>".$req."</li>";
				}
				 ?>
				<li></li>
			</ol>
			&emsp;Demikian surat lamaran saya buat dengan sebenarnya dan atas perhatian serta kebijaksanaan Bapak/Ibu pimpinan saya mengucapkan terima kasih.
				</p>
    		</div>
    	</div>
    	<div class="col-print-12">
    		<p align="right">Hormat saya.</p>
    	</div>
    	&nbsp;
    	&nbsp;
    	&nbsp;
    	&nbsp;
    	<br>
    	<div class="col-print-12">
    		<p align="right"><b><?php echo $letter['name'] ?></b></p>
    	</div>
		

		
</body>
</html>