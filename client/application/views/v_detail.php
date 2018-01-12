<?php
$session = $this->session->userdata('session');
$has_session = $session != null;
$user_id = null;    
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-1.11.0.js"></script>

    <script type="text/javascript">
	function printDiv(divName) {
	    var printContents = document.getElementById(divName).innerHTML;
	    var originalContents = document.body.innerHTML;
	    document.body.innerHTML = printContents;
	    window.print();
	    document.body.innerHTML = originalContents;
	}
	</script>

</head>
<body>

	<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">SM Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav mr-auto">
            	<li class="nav-item">
                  <?php echo anchor('','Beranda', "class='nav-link'");?>
                </li>
            <li class="nav-item">
              <?php echo anchor('booking','Pesan Tiket', "class='nav-link'");?>
            </li>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <?php if($has_session): ?>
                <li class="nav-item">
                <?php echo anchor('user/logout','Logout', "class='nav-link'");?>
                </li>
            <?php else: ?>
                <li class="nav-item">
                  <?php echo anchor('register','Register', "class='nav-link'");?>
                </li>
            <?php endif; ?>
          </ul>
        </div>
      </nav>
    </header>
    <br><br><br>

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
	<input type="button" class='btn btn-success btn-sm' onclick="printDiv('detail-tiket')" value="Cetak Tiket" />
	<?php
	echo anchor('tiket','Kembali', "class='btn btn-danger btn-sm'");
	?>
</div>

<body>
</body>
</html>