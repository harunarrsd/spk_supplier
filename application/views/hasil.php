<?php 
foreach ($main['bobot'] as $k) {
	$total = $k->bobot_1+$k->bobot_2+$k->bobot_3+$k->bobot_4+$k->bobot_5;
	$bobotsatu = number_format(($k->bobot_1/$total*100)/100,2);
	$bobotdua = number_format(($k->bobot_2/$total*100)/100,2);
	$bobottiga = number_format(($k->bobot_3/$total*100)/100,2);
	$bobotempat = number_format(($k->bobot_4/$total*100)/100,2);
	$bobotlima = number_format(($k->bobot_5/$total*100)/100,2);
}
?>
<nav aria-label="breadcrumb" style="background-color: #e9ecef;">
	<ol class="breadcrumb container font-kedua p-3" style="margin-bottom: auto;">
		<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Hasil Perhitungan</li>
	</ol>
</nav>
<div class="body-utama pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card font-kedua" style="margin-top: 50px">
				<?php echo form_open_multipart('supplier/update_hasil/');?>
					<div class="card-header">
						<h3 class="card-title text-center">Tabel Hasil Perhitungan</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive" >
							<table class="table table-bordered table-striped table-hovered text-center" >
								<thead class="font-utama">
									<th>NAMA SUPPLIER</th>
									<th>DISKON</th>
									<th>PELAYANAN</th>
									<th>KUALITAS KAROSESI</th>
									<th>PROGRAM SERVIS BERKALA</th>
									<th>BONUS</th>
									<th>Value</th>
								</thead>
								<tbody>
									<?php 
										foreach ($main['hasil'] as $k) { ;
											$value = ($bobotsatu*$k->diskon)+($bobotdua*$k->pelayanan)+($bobottiga*$k->karoseri)+($bobotempat*$k->servis)+($bobotlima*$k->bonus);
										?>
											<tr>
												<td><?php echo $k->nama;?></td>
												<td><?php echo $k->diskon;?></td>
												<td><?php echo $k->pelayanan;?></td>
												<td><?php echo $k->karoseri;?></td>
												<td><?php echo $k->servis;?></td>
												<td><?php echo $k->bonus;?></td>
												<td><?php echo $value;?></td>
												<input type="hidden" name="id_supplier_konversi[]" value="<?php echo $k->id_supplier_konversi;?>">
												<input type="hidden" name="value[]" value="<?php echo $value;?>"></<input>
											</tr>
										<?php }
										?>
										<tr class="font-utama">
											<td>Bobot</td>
											<td><?php echo $bobotsatu;?></td>
											<td><?php echo $bobotdua;?></td>
											<td><?php echo $bobottiga;?></td>
											<td><?php echo $bobotempat;?></td>
											<td><?php echo $bobotlima;?></td>
										</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-dark"><i class="fa fa-expand"></i> Lihat Ranking</button>
					</div>
				<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>
