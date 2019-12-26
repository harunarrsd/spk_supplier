<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card" style="margin-top: 50px;">
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
					<div class="card-footer">
						<button type="submit" class="btn-primary btn"><i class="fa fa-save"></i> Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
