<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	<?php if($this->uri->segment(1) == 'home') { ?>
		<a class="navbar-brand font-utama" href="<?php base_url(); ?>home">
			<img class="img-fluid" src="<?php echo base_url(); ?>images/logo.png" style="width:40px; margin-right:10px" alt="">
			PT. Fesa Sejahtera
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto font-kedua">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Haii, <?php echo $this->session->userdata('nama');?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php base_url()?>login/logout">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	<?php } ?>
	<?php if($this->uri->segment(1) == 'supplier') { ?>
		<a href="<?php echo base_url();?>home" class="text-light font-kedua p-2"><i class="fa fa-chevron-left"></i> Kembali</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<h4 class="text-light font-kedua">
						<?php if($this->uri->segment(2) == 'setting') { ?>
						Pengaturan
						<?php } ?>
						<?php if($this->uri->segment(2) == 'ranking') { ?>
						Data Ranking
						<?php } ?>
						<?php if($this->uri->segment(2) == 'normalisasi') { ?>
						Data Normalisasi
						<?php } ?>
						<?php if($this->uri->segment(2) == 'hasil') { ?>
						Hasil Perhitungan
						<?php } ?>
					</h4>
				</li>
			</ul>
		</div>
	<?php } ?>
	</div>
</nav>
