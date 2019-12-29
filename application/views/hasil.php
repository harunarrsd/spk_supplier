<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card" style="margin-top: 50px">
				<div class="card-header">
					<h3 class="card-title text-center">Tabel Hasil Penghitungan</h3>
				</div>
				<div class="card-body">
					<div class="table-responsive" >
						<table class="table table-bordered table-striped table-hovered text-center" >
							<thead>
								<th>NAMA SUPPLIER</th>
								<th>VALUE</th>
								<th>RANKING</th>
							</thead>
							<tbody>
								<?php 
									// Data Konversi
									foreach ($main['hasil'] as $h) { ?>
										<tr>
											<td><?php echo $h->nama ?></td>
											<td><?php echo $h->value ?></td>
											<td><strong><?php echo $h->ranking ?></strong></td>
										</tr>
									<?php }
									?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
