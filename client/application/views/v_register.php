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

<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">SM Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <?php if($has_session): ?>
                <li class="nav-item">
                <?php echo anchor('user/logout','Logout', "class='nav-link'");?>
                </li>
            <?php else: ?>
                <li class="nav-item">
                  <?php echo anchor('','Beranda', "class='nav-link'");?>
                </li>
                <li class="nav-item">
                  <?php echo anchor('user','Login', "class='nav-link'");?>
                </li>
            <?php endif; ?>
          </ul>
        </div>
      </nav>
    </header>
    <br><br><br>

<?php echo form_open('Register/add_action'); ?>
<div class="container" id="register-form">
    <h2 align="center" style="margin-top: 10px;">Daftar Member</h2>
    <br>

    <div class="row" style="margin: 20px;">
        <div class="col-4">Nama Lengkap</div>
        <div class="col-8"><input class="form-control form-control-sm" type="text" name="nama" placeholder="Nama Lengkap"></div>
    </div>
    <div class="row" style="margin: 20px;">
        <div class="col-4">Alamat</div>
        <div class="col-8"><input class="form-control form-control-sm" type="text" name="alamat" placeholder="Alamat"></div>
    </div>
    <div class="row" style="margin: 20px;">
        <div class="col-4">Telepon</div>
        <div class="col-8"><input class="form-control form-control-sm" type="text" name="telp" placeholder="Nomor Telepon"></div>
    </div>
    <div class="row" style="margin: 20px;">
        <div class="col-4">Jenis Kelamin</div>
        <div class="col-8">
            <select name="jenis_kelamin" class="custom-select">
                <option value="P">Pria</option>
                <option value="W">Wanita</option>
            </select>
        </div>
    </div>
    <div class="row" style="margin: 20px;">
        <div class="col-4">Email</div>
        <div class="col-8"><input class="form-control form-control-sm" type="email" name="email" placeholder="Email"></div>
    </div>
    <div class="row" style="margin: 20px;">
        <div class="col-4">Password</div>
        <div class="col-8"><input class="form-control form-control-sm" type="password" name="password" placeholder="Password"></div>
    </div>
    <div class="row" style="margin: 20px;">
        <div class="col-4">Umur</div>
        <div class="col-8"><input class="form-control form-control-sm" type="text" name="umur" placeholder="Umur"></div>
    </div>
    <div class="row" style="margin: 20px;">
        <div class="col-4">Tanggal Lahir</div>
        <div class="col-8"><input class="form-control form-control-sm" type="Date" name="ttl" placeholder="Tanggal Lahir"></div>
    </div>
    <div class="row" style="margin: 20px;">
        <div class="col-4">Kode Pos</div>
        <div class="col-8"><input class="form-control form-control-sm" type="text" name="kode_pos" placeholder="Kode Pos"></div>
    </div>
    <div class="row" style="margin: 20px;">
        <div class="col-4"></div>
        <div class="col-8">
            <input class="btn btn-primary btn-sm" type="submit" value="Daftar" name="register" align="right">
            <!-- <a href="" class="btn btn-danger btn-sm">Batal</a> -->
            <?php echo anchor('','Batal', "class='btn btn-danger btn-sm'");?>
        </div>
    </div>
</div>
<?php echo form_close();?>
</body>
</html>