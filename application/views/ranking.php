<nav aria-label="breadcrumb" style="background-color: #e9ecef;">
	<ol class="breadcrumb container font-kedua p-3" style="margin-bottom: auto;">
		<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Hasil Ranking</li>
	</ol>
</nav>
<div class="body-utama pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card font-kedua" style="margin-top: 50px">
				<?php echo form_open_multipart('supplier/create_hasil/');?>
					<div class="card-header">
						<h3 class="card-title text-center">Tabel Keputusan Pemilihan Truk</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive" >
							<table id="example" class="table table-bordered table-striped table-hovered text-center" >
								<thead class="font-utama">
									<th>Ranking</th>
									<th>NAMA SUPPLIER</th>
									<th>Value</th>
								</thead>
								<tbody>
									<?php 
									$no=0;
										foreach ($main['ranking'] as $k) { $no++;
										?>
											<tr>
												<td><?php echo $no;?></td>
												<td><?php echo $k->nama_supplier;?></td>
												<td><?php echo $k->value;?></td>
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
</div>
