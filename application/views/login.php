<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
		<title>SPK PT. Fesa Antaran Logistik</title>
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Montserrat&display=swap" rel="stylesheet">
		<link rel="shortcut icon" href="<?php echo base_url();?>images/logo.png" type="image/x-icon">
    <!-- Bootstrap core CSS -->
		<link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/login.css" rel="stylesheet">
  </head>
<body>
<!-- Login Box -->
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?php echo base_url(); ?>images/logo.png" id="icon" alt="User Icon" class="pt-4" />
			<h5 class="container py-3 px-4 font-utama">Sistem Pendukung Keputusan Pemilihan Supplier Pengadaan Truck Untuk Jasa Antar Barang Pada PT. Fesa Antaran Logistik</h5>
    </div>
    
    <!-- Login Form -->
		<form method="POST" action="<?php echo base_url(); ?>login/action">
			<?php echo $this->session->flashdata('notif') ?>
      <input type="text" id="login" class="fadeIn second font-kedua" name="username" placeholder="Username" required>
      <input type="password" id="password" class="fadeIn third font-kedua" name="password" placeholder="Password" required>
			<input type="submit" class="fadeIn fifth font-kedua" name="submit" value="Login">
		</form>

  </div>
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/popper/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
</body>

</html>
