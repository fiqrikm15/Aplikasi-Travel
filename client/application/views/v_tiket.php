<html>
<head>
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-1.11.0.js"></script>
</head>

<body>
<?php echo form_open('Register/add_action'); ?>
<div class="container" id="pesan-form">
    <h2 align="center" style="margin-top: 10px;">Pesan Tiket</h2>
    <br>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Kota Keberangkatan</div>
        <div class="col-8">
            <select name="jenis_kelamin" class="form-control form-control-sm">
                <?php foreach($kota_asal as $ka): ?>

                    <option value="<?php echo $ka->id; ?>"><?php echo $ka->kota_asal; ?></option>

                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Kota Tujuan</div>
        <div class="col-8">
            <select name="jenis_kelamin" class="form-control form-control-sm">
                <?php foreach($kota_tujuan as $kt): ?>

                    <option value="<?php echo $kt->id; ?>"><?php echo $kt->kota_tujuan; ?></option>

                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Tanggal Keberangkaran</div>
        <div class="col-8"><input class="form-control form-control-sm" type="date" name="telp" placeholder="Nomor Telepon"></div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Jam Keberangkaran</div>
        <div class="col-8"><input class="form-control form-control-sm" type="date" name="telp" placeholder="Nomor Telepon"></div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Tanggal Pulang</div>
        <div class="col-8"><input class="form-control form-control-sm" type="date" name="telp" placeholder="Nomor Telepon"></div>
    </div>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Jam Pulang</div>
        <div class="col-8"><input class="form-control form-control-sm" type="date" name="telp" placeholder="Nomor Telepon"></div>
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