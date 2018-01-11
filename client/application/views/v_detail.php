<html>
<head>
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-1.11.0.js"></script>
</head>

<div class="container" id="data-tiket">
	<div id="detail-tiket">
		<h3>SM Travel (Tiket)</h3>
		<hr>

		<?php

		foreach ($tiket as $tk) {
			if($tk->id == $id):
		?>

			<div class="row">
		    <div class="col">
				<label style="margin-right: 8.2em;">Nama:</label><?php echo strtoupper($tk->nama); ?>
		    </div>
		    <div class="col">
				<label style="margin-right: 4em;">No Tiket:</label><?php echo strtoupper($tk->no_tiket); ?>
		    </div>
		  	</div>

		  	<div class="row">
			    <div class="col">
					<label style="margin-right: 2em;">Kota Keberangkaran:</label><?php echo $tk->kota_asal; ?>
			    </div>
			    <div class="col">
					<label style="margin-right: 2.6em;">Kota Tujuan:</label><?php echo $tk->kota_tujuan; ?>
			    </div>
		  	</div>
			
			<div class="row">
			    <div class="col">
					<label style="margin-right: 7.2em;">No Kursi:</label><?php echo $tk->no_kursi; ?>
			    </div>
		  	</div>

		  	<div class="row">
			    <div class="col">
					<label style="margin-right: 1.1em;">Waktu Keberangkatan:</label><?php echo $tk->waktu_berangkat; ?>
			    </div>
		  	</div>

		<?php
		endif;
		}
		?>	
	</div>
	<br>
	<?php
	echo anchor('tiket/detail/'.$tk->id,'Simpan', "class='btn btn-success btn-sm' style='margin-right:10px;'");
	echo anchor('tiket','Kembali', "class='btn btn-danger btn-sm'");
	?>
</div>

<body>
</body>
</html>