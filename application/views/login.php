<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
		<title>SPK PT. Fesa</title>
		<link rel="shortcut icon" href="<?php echo base_url();?>images/logo.png" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
      <img src="<?php echo base_url(); ?>images/logo.png" id="icon" alt="User Icon" />
			<h6 class="container py-3">Sistem Pendukung Keputusan Pemilihan Supplier Pengadaan Truck Untuk Jasa Antar Barang Pada PT. Fesa Antaran Logistik</h6>
    </div>
    
    <!-- Login Form -->
    <form method="POST" action="<?php echo base_url(); ?>login/action">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" required>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
      <input type="submit" class="fadeIn fifth" name="submit" value="Login">
    </form>

    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
