<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	<?php if($this->uri->segment(1) == 'index') { ?>
		<a class="navbar-brand" href="<?php base_url(); ?>index">
			<img class="img-fluid" src="" style="width:40px; margin-right:5px" alt="">PT. Fesa Sejahtera
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Nama User
						</a>
						<!-- <img class="img-fluid" src="images/logo.png" alt=""> -->
				</li>
				<li class="nav-item">
					<a class="btn btn-danger" href="logout.php">Logout <i class="fa fa-chevron-right"></i></a>
				</li>
			</ul>
		</div>
	<?php } ?>
	<?php if($this->uri->segment(1) == 'supplier') { ?>
		<!-- <a class="btn btn-primary" href="logout.php"><i class="fa fa-chevron-left"></i> Kembali</a> -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#"><?php echo $this->session->userdata('nama');?>
						</a>
						<!-- <img class="img-fluid" src="images/logo.png" alt=""> -->
				</li>
				<li class="nav-item">
					<a class="btn btn-danger" href="<?php echo site_url('login/logout');?>">Logout <i class="fa fa-chevron-right"></i></a>
				</li>
			</ul>
		</div>
	<?php } ?>
	</div>
</nav>
