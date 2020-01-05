<nav aria-label="breadcrumb" style="background-color: #e9ecef;">
	<ol class="breadcrumb container font-kedua p-3" style="margin-bottom: auto;">
		<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
		<li class="breadcrumb-item"><a href="<?php echo base_url('supplier');?>">Supplier</a></li>
		<li class="breadcrumb-item active" aria-current="page">Setting</li>
	</ol>
</nav>
<div class="body-utama pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card font-kedua" style="margin-top: 50px;">
					<div class="card-header">
						<h3 class="card-title text-center font-utama">Pengaturan</h3>
					</div>
					<form action="update_setting" method="post">
						<div class="card-body">
							<?php echo $this->session->flashdata('notif') ?>
							<div class="form-group row">
								<label for="" class="col-md-2 col-form-label">Kriteria 1</label>
								<div class="col-md-4">
									<input type="text" class="form-control" value="Diskon" disabled>
								</div>
								<label for="" class="col-md-2 col-form-label">Bobot 1</label>
								<div class="col-md-4 input-group">
									<input type="hidden" class="form-control input-input-group-append" name="id" value="<?php echo $main['bobot'][0]->id ?>">
									<input type="text" class="form-control input-input-group-append" name="bobot_1" value="<?php echo $main['bobot'][0]->bobot_1 ?>">
									<div class="input-group-append">
										<div class="input-group-text">%</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-md-2 col-form-label">Kriteria 2</label>
								<div class="col-md-4">
									<input type="text" class="form-control" value="Pelayanan" disabled>
								</div>
								<label for="" class="col-md-2 col-form-label">Bobot 2</label>
								<div class="col-md-4 input-group">
									<input type="text" class="form-control" name="bobot_2" value="<?php echo $main['bobot'][0]->bobot_2 ?>">
									<div class="input-group-append">
										<div class="input-group-text">%</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-md-2 col-form-label">Kriteria 3</label>
								<div class="col-md-4">
									<input type="text" class="form-control" value="Kualitas Karoseri" disabled>
								</div>
								<label for="" class="col-md-2 col-form-label">Bobot 3</label>
								<div class="col-md-4 input-group">
									<input type="text" class="form-control" name="bobot_3" value="<?php echo $main['bobot'][0]->bobot_3 ?>">
									<div class="input-group-append">
										<div class="input-group-text">%</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-md-2 col-form-label">Kriteria 4</label>
								<div class="col-md-4">
									<input type="text" class="form-control" value="Program Servis Berkala" disabled>
								</div>
								<label for="" class="col-md-2 col-form-label">Bobot 4</label>
								<div class="col-md-4 input-group">
									<input type="text" class="form-control" name="bobot_4" value="<?php echo $main['bobot'][0]->bobot_4 ?>">
									<div class="input-group-append">
										<div class="input-group-text">%</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-md-2 col-form-label">Kriteria 5</label>
								<div class="col-md-4">
									<input type="text" class="form-control" value="Bonus" disabled>
								</div>
								<label for="" class="col-md-2 col-form-label">Bobot 5</label>
								<div class="col-md-4 input-group">
									<input type="text" class="form-control" name="bobot_5" value="<?php echo $main['bobot'][0]->bobot_5 ?>">
									<div class="input-group-append">
										<div class="input-group-text">%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer" style="margin-bottom: -16px;">
							<button type="submit" class="btn-dark btn"><i class="fa fa-save"></i> Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
