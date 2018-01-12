<?php
$session = $this->session->userdata('session');
$has_session = $session != null;
$user_id = null;    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>SM Travel</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-1.11.0.js"></script>

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="home">SM Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <?php echo anchor('booking','Pesan Tiket', "class='nav-link'");?>
            </li>
            <?php if($has_session): ?>
            	<li class="nav-item">
                <?php echo anchor('user/logout','Logut', "class='nav-link'");?>
            	</li>
        	<?php else: ?>
        		<li class="nav-item">
            <?php echo anchor('user','Login', "class='nav-link'");?>
		        </li>
	            <li class="nav-item">
                <?php echo anchor('register','Daftar Member', "class='nav-link'");?>
	            </li>
            <?php endif; ?>
          </ul>
        </div>
      </nav>
    </header>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing" style="margin-top: 100px">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <h2>Travel</h2>
            <p>Layanan Jasa angkutan darat yang menghubungkan antar kota, dengan konsep point to point (outlet ke outlet). Tepat waktu dengan rute yang tetap dan terjadwal secara reguler.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <h2>Pariwisata</h2>
            <p>Layanan Jasa Travel Agent yang akan mewujudkan impian wisata anda dan melayani keperluan tour anda.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <h2>Cafe</h2>
            <p>Hadir untuk kenyamanan dan memenuhi kebutuhan anda (Menyediakan kebutuhan para penumpang)</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Travel <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Layanan Jasa angkutan darat yang menghubungkan antar kota, dengan konsep point to point (outlet ke outlet). Tepat waktu dengan rute yang tetap dan terjadwal secara reguler untuk kenyamana anda.</p>
          </div>
          <div class="col-md-5">
            <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image"> -->
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Pariwisata<span class="text-muted"> See for yourself.</span></h2>
            <p class="lead">Layanan Jasa Travel Agent yang akan mewujudkan impian wisata anda dan melayani keperluan tour anda.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image"> -->
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Cafe<span class="text-muted"> Checkmate.</span></h2>
            <p class="lead">Hadir untuk kenyamanan dan memenuhi kebutuhan anda (Menyediakan kebutuhan para penumpang)</p>
          </div>
          <div class="col-md-5">
            <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image"> -->
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 SM Travel, Inc.</p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
