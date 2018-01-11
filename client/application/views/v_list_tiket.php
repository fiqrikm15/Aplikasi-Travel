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
</head>

<div class="container" id="data-tiket">
	<h2>Daftar Tiket Yang Dipesan</h2>
	<br>
	<table class="table">
		<thead>
			<tr class="table-info">
				<th>No</th>
				<th>Nama Penumpang</th>
				<th>Tujuan</th>
				<th>No Kursi</th>
				<th>Waktu Keberangkatan</th>
				<th>Total Bayar</th>
				<th>Action</th>
			</tr>
		</thead>	
		<tbody>
			<?php 
			$i = 0;
			foreach ($tiket as $tk): 
				if($tk->id_user == $session->id):
					if($tk->batas_waktu >= date('Y-m-d H:i:s')): ?>
						<tr>
							<td><?php echo $i+1;?></td>
							<td><?php echo $tk->nama;?></td>
							<td><?php echo $tk->kota_tujuan;?></td>
							<td><?php echo $tk->no_kursi;?></td>
							<td><?php echo $tk->waktu_berangkat;?></td>
							<td><?php echo "Rp.".$tk->total_bayar;?></td>
							<td>
								<?php
								echo anchor('tiket/detail/'.$tk->id,'Detail', "class='btn btn-success btn-sm' style='margin-right:10px;'");
								echo anchor('tiket/delete/'.$tk->id,'Batal Pesan', "class='btn btn-danger btn-sm'");
								?>
							</td>
						</tr>
					<?php
					$i ++;
				endif;
				endif;
			endforeach; 
			?>
		</tbody>	
	</table>
</div>

<body>
</body>
</html>