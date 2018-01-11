<html>
<head>
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-1.11.0.js"></script>
</head>

<body>
<?php echo form_open('User/login'); ?>
    <div class="container" id="register-form">
        <h2 align="center" style="margin-top: 10px;">Login Member</h2>
        <br>

        <div class="row" style="margin: 20px;">
            <div class="col-4">Email</div>
            <div class="col-8"><input class="form-control form-control-sm" type="text" name="email" placeholder="Email"></div>
        </div>

        <div class="row" style="margin: 20px;">
            <div class="col-4">Password</div>
            <div class="col-8"><input class="form-control form-control-sm" type="password" name="password" placeholder="Password"></div>
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