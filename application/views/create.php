<nav aria-label="breadcrumb" style="background-color: #e9ecef;">
	<ol class="breadcrumb container font-kedua p-3" style="margin-bottom: auto;">
		<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Supplier</li>
	</ol>
</nav>
<div class="body-utama p-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card bg-light font-kedua">
					<div class="card-header">
						<a href="<?php echo base_url('supplier/setting');?>" class="btn"><i class="fa fa-gears"></i> Pengaturan</a>
						<button class="btn" id="tambah-data"><i class="fa fa-plus"></i> Tambah Data</button>
						
					</div>
					<div class="card-body">
						<div class="table-responsive" >
							<table class="table table-bordered table-striped table-hovered" id="table-data">
								<thead class="font-utama">
									<th>NAMA SUPPLIER</th>
									<th>DISKON</th>
									<th>PELAYANAN</th>
									<th>KUALITAS KAROSESI</th>
									<th>PROGRAM SERVIS BERKALA</th>
									<th>BONUS</th>
									<th width="105px">Aksi</th>
								</thead>
								<tbody id="table-body">
									<?php
										foreach ($main['supplier'] as $s) {
											echo "<tr data-id='$s[id]'>
													<td>
														<span class='span-nama_supplier caption' data-id='$s[id]'>";
														if($s['nama_supplier']==null OR $s['nama_supplier']==""){
															echo 'Ketik disini...';
														}else{
															echo "<p>$s[nama_supplier]</p>";
														}	
											echo "		</span>
														<input type='text' class='field-nama_supplier form-control editor' value='$s[nama_supplier]' data-id='$s[id]' />
													</td>
													<td>
														<span class='span-diskon caption' data-id='$s[id]'>";
															if($s['diskon']==null OR $s['diskon']==""){
																echo "Ketik disini...";
															}else{
																echo "<p>$s[diskon] %</p>";
															}
											echo "		</span>
														<input type='number' class='field-diskon form-control editor' value='$s[diskon]' data-id='$s[id]'/>
													</td>
													<td>
														<span class='span-pelayanan caption' data-id='$s[id]'>";
															if($s['pelayanan']==null OR $s['pelayanan']==""){
																echo "Ketik disini...";
															}else{
																echo "<p>$s[pelayanan]</p>";
															}
											echo "		</span>
														<input type='text' class='field-pelayanan form-control editor' value='$s[pelayanan]' data-id='$s[id]' list='pelayanan'/>
														<datalist id='pelayanan'>
															<option value='Sangat Memuaskan'>Sangat Memuaskan</option>
															<option value='Memuaskan'>Memuaskan</option>
															<option value='Cukup Memuaskan'>Cukup Memuaskan</option>
															<option value='Kurang Memuaskan'>Kurang Memuaskan</option>
															<option value='Sangat Kurang Memuaskan'>Sangat Kurang Memuaskan</option>
														</datalist>
													</td>
													<td>
														<span class='span-karoseri caption' data-id='$s[id]'>";
															if($s['karoseri']==null OR $s['karoseri']==""){
																echo "Ketik disini...";
															}else{
																echo "<p>$s[karoseri]</p>";
															}
											echo "		</span>
														<input type='text' class='field-karoseri form-control editor' value='$s[karoseri]' data-id='$s[id]' list='karoseri'/>
														<datalist id='karoseri'>
															<option value='Grade A'>Grade A</option>
															<option value='Grade B'>Grade B</option>
															<option value='Grade C'>Grade C</option>
														</datalist>
													</td>
													<td>
														<span class='span-program_servis caption' data-id='$s[id]'>";
															if($s['program_servis']==null OR $s['program_servis']==""){
																echo "Ketik disini...";
															}else{
																echo "<p>$s[program_servis]</p>";
															}
											echo "		</span>
														<input type='number' class='field-program_servis form-control editor' value='$s[program_servis]' data-id='$s[id]' />
													</td>
													<td>
														<span class='span-bonus caption' data-id='$s[id]'>";
															if($s['bonus']==null OR $s['bonus']==""){
																echo "Ketik disini...";
															}else{
																echo "<p>$s[bonus]</p>";
															}
											echo "		</span>
														<input type='text' class='field-bonus form-control editor' value='$s[bonus]' data-id='$s[id]' list='bonus'/>
														<datalist id='bonus'>
															<option value='1 Barang'>1 Barang</option>
															<option value='2 Barang'>2 Barang</option>
															<option value='3 Barang'>3 Barang</option>
															<option value='4 Barang'>4 Barang</option>
															<option value='5 Barang'>5 Barang</option>
														</datalist>
													</td>
													<td>
														<button class='btn btn-sm btn-danger hapus-data' data-id='$s[id]' data-id_sk='$s[id_supplier_konversi]'><i class='fa fa-close'></i> Hapus</button></td>
												</tr>";
										}
										?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-md-6">
								<a href="<?php echo base_url();?>supplier/normalisasi" class="btn btn-dark"><i class="fa fa-angle-double-right"></i> Normalisasikan</a>
							</div>
							<div class="col-md-6">
								<p class="text-right">*Note : Tekan Enter untuk menyimpan perubahan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
