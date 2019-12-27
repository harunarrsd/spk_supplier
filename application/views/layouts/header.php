<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	<?php if($this->uri->segment(1) == 'home') { ?>
		<a class="navbar-brand" href="<?php base_url(); ?>home">
			<img class="img-fluid" src="<?php echo base_url(); ?>images/logo.png" style="width:40px; margin-right:10px" alt="">PT. Fesa Sejahtera
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link text-capitalize" href="#"><?php echo $this->session->userdata('nama');?>
						</a>
						<!-- <img class="img-fluid" src="images/logo.png" alt=""> -->
				</li>
				<li class="nav-item">
					<a class="btn btn-danger" href="<?php base_url()?>home/logout">Logout <i class="fa fa-chevron-right"></i></a>
				</li>
			</ul>
		</div>
	<?php } ?>
	<?php if($this->uri->segment(1) == 'supplier') { ?>
		<!-- <a href="<?php base_url();?>tes" class="btn text-light"><i class="fa fa-chevron-left"></i> Kembali</a> -->
		<a href="<?php echo base_url();?>home" class="btn text-light"><i class="fa fa-chevron-left"></i> Kembali</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">
						<!-- <img class="img-fluid" src="images/logo.png" alt=""> -->
						</a>
				</li>
				<li class="nav-item">
					<h4 class="text-light">
						<?php if($this->uri->segment(2) == 'index') { ?>
						Data Baru
						<?php } ?>
						<?php if($this->uri->segment(2) == 'setting') { ?>
						Pengaturan
						<?php } ?>
						<?php if($this->uri->segment(2) == 'history') { ?>
						Riwayat
						<?php } ?>
						<?php if($this->uri->segment(2) == 'normalisasi') { ?>
						Data Ternormalisasi
						<?php } ?>
						<?php if($this->uri->segment(2) == 'hasil') { ?>
						Hasil Penghitungan
						<?php } ?>
					</h4>
				</li>
			</ul>
		</div>
	<?php } ?>
	</div>
</nav>
