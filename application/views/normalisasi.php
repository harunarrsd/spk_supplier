<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card" style="margin-top: 50px">
				<div class="card-header">
					<h3 class="card-title text-center">Tabel Normalisasi</h3>
				</div>
				<div class="card-body">
					<div class="table-responsive" >
						<table class="table table-bordered table-striped table-hovered text-center" >
							<thead>
								<th>NAMA SUPPLIER</th>
								<th>DISKON</th>
								<th>PELAYANAN</th>
								<th>KUALITAS KAROSESI</th>
								<th>PROGRAM SERVIS BERKALA</th>
								<th>BONUS</th>
							</thead>
							<tbody>
								<?php 
									// Data Konversi
									foreach ($main['konversi'] as $k) { ?>
										<tr>
											<td><?php echo $k->nama ?></td>
											<td><?php echo $k->diskon ?></td>
											<td><?php echo $k->pelayanan ?></td>
											<td><?php echo $k->karoseri ?></td>
											<td><?php echo $k->servis ?></td>
											<td><?php echo $k->bonus ?></td>
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
