<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<a href="setting" class="btn"><i class="fa fa-gears"></i> Pengaturan</a>
					<a href="" class="btn"><i class="fa fa-file"></i> Import File</a>
					<button class="btn" id="tambah-data"><i class="fa fa-plus"></i> Tambah Baris</button>
					
				</div>
				<div class="card-body">
					<div class="table-responsive" >
						<table class="table table-bordered table-striped table-hovered" id="table-data">
							<thead>
								<th>NAMA SUPPLIER</th>
								<th>DISKON</th>
								<th>PELAYANAN</th>
								<th>KUALITAS KAROSESI</th>
								<th>PROGRAM SERVIS BERKALA</th>
								<th>BONUS</th>
								<th>HAPUS</th>
							</thead>
							<tbody id="table-body">
								<?php 
									// Data Supplier
									foreach ($main['supplier'] as $s) {
										echo "<tr data-id='$s[id]'>
												<td><span class='span-nama_supplier caption' data-id='$s[id]'>$s[nama_supplier]</span> <input type='text' class='field-nama_supplier form-control editor' value='$s[nama_supplier]' data-id='$s[id]' /></td>
												<td><span class='span-diskon caption' data-id='$s[id]'>$s[diskon]</span> <input type='text' class='field-diskon form-control editor' value='$s[diskon]' data-id='$s[id]' /></td>
												<td><span class='span-pelayanan caption' data-id='$s[id]'>$s[pelayanan]</span> <input type='text' class='field-pelayanan form-control editor' value='$s[pelayanan]' data-id='$s[id]' /></td>
												<td><span class='span-karoseri caption' data-id='$s[id]'>$s[karoseri]</span> <input type='text' class='field-karoseri form-control editor' value='$s[karoseri]' data-id='$s[id]' /></td>
												<td><span class='span-program_servis caption' data-id='$s[id]'>$s[program_servis]</span> <input type='text' class='field-program_servis form-control editor' value='$s[program_servis]' data-id='$s[id]' /></td>
												<td><span class='span-bonus caption' data-id='$s[id]'>$s[bonus]</span> <input type='text' class='field-bonus form-control editor' value='$s[bonus]' data-id='$s[id]' /></td>
												<td><button class='btn btn-xs btn-danger hapus-s' data-id='$s[id]'><i class='glyphicon glyphicon-remove'></i> Hapus</button></td>
											  </tr>";
									}
									?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<a href="" class="btn btn-primary"><i class="fa fa-expand"></i> Hitung</a>
				</div>
			</div>
		</div>
	</div>
</div>
