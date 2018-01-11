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

<body>
<?php echo form_open('Booking/add_action'); ?>
<div class="container" id="pesan-form">
    <h2 align="center" style="margin-top: 10px;">Pesan Tiket</h2>
    <br>

    <div class="row" style="margin: 20px;">
        <input type="hidden" name="id_user" value="<?php if($has_session) echo $session->id; ?>">
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Kota Keberangkatan</div>
        <div class="col-8">
            <select name="kota_asal" class="custom-select">
                <?php foreach($kota_asal as $ka): ?>

                    <option value="<?php echo $ka->id; ?>"><?php echo $ka->kota_asal; ?></option>

                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Kota Tujuan</div>
        <div class="col-8">
            <select name="kota_tujuan" class="custom-select">
                <?php foreach($kota_tujuan as $kt): ?>

                    <option value="<?php echo $kt->id; ?>"><?php echo $kt->kota_tujuan; ?></option>

                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Tanggal Keberangkaran</div>
        <div class="col-8">
            <input class="form-control form-control-sm" type="date" name="tgl_berangkat">
        </div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Jam Keberangkaran</div>
        <div class="col-8">
            <select class="custom-select" name="jam_berangkat">
                <?php for($i = 0; $i < 24; $i++): ?>
                    <option><?php echo $i+1; ?></option>
                <?php endfor; ?>
            </select>
            :
            <select class="custom-select" name="menit_berangkat">
                <?php for($i = 0; $i < 60; $i++): ?>
                    <option><?php echo $i+1; ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Tanggal Pulang</div>
        <div class="col-8"><input class="form-control form-control-sm" type="date" name="tgl_pulang"></div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Jam Pulang</div>
        <div class="col-8">
            <select class="custom-select" name="jam_pulang">
                <?php for($i = 0; $i < 24; $i++): ?>
                    <option><?php echo $i+1; ?></option>
                <?php endfor; ?>
            </select>
            :
            <select class="custom-select" name="menit_pulang">
                <?php for($i = 0; $i < 60; $i++): ?>
                    <option><?php echo $i+1; ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Nomor Kursi</div>
        <div class="col-8">
            <select class="custom-select" name="no_kursi">
                <?php for($i = 0; $i < 30; $i++): ?>
                    <option><?php echo $i+1; ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Paket</div>
        <div class="col-8">
            <select class="custom-select" name="paket">
                <option value="1">Pelajar</option>
                <option value="2">Ekonomi</option>
                <option value="3">Bisnis</option>
            </select>
        </div>
    </div>    

    <div class="row" style="margin: 20px;">
        <div class="col-4"></div>
        <div class="col-8">
            <input class="btn btn-primary btn-sm" type="submit" value="Pesan" name="register" align="right">
            <a href="" class="btn btn-danger btn-sm">Batal</a>
        </div>
    </div>
</div>
<?php echo form_close();?>
</body>
</html>