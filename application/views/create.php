<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<a href="" class="btn"><i class="fa fa-gears"></i> Pengaturan</a>
					<a href="" class="btn"><i class="fa fa-file"></i> Import File</a>
					<a href="" class="btn"><i class="fa fa-plus"></i> Tambah Baru</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hovered">
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
									// Data Supplier
									foreach($main['supplier'] as $s){
										$id = $s->id;
										$nama = $s->nama_supplier;
										$diskon = $s->diskon;
										$pelayanan = $s->pelayanan;
										$karoseri = $s->karoseri;
										$program_servis = $s->program_servis;
										$bonus = $s->bonus;
										// $id = $s['id'];
										// $nama = $s['nama_supplier'];
										// $diskon = $s['diskon'];
										// $pelayanan = $s['pelayanan'];
										// $karoseri = $s['karoseri'];
										// $program_servis = $s['program_servis'];
										// $bonus = $s['bonus'];
	
										echo "<tr>";
										echo "<td>
										<span class='edit' >".$nama."</span>
										<input type='text' class='txtedit' data-id='".$id."' data-field='name' id='nametxt_".$id."' value='".$nama."' >
										</td>";
										echo "<td>
										<span class='edit' >".$diskon."</span>
										<input type='text' class='txtedit' data-id='".$id."' data-field='diskon' id='diskontxt_".$id."' value='".$diskon."' >
										</td>";
										echo "<td>
										<span class='edit' >".$pelayanan."</span>
										<input type='text' class='txtedit' data-id='".$id."' data-field='pelayanan' id='pelayanantxt_".$id."' value='".$pelayanan."' >
										</td>";
										echo "<td>
										<span class='edit' >".$karoseri."</span>
										<input type='text' class='txtedit' data-id='".$id."' data-field='karoseri' id='karoseritxt_".$id."' value='".$karoseri."' >
										</td>";
										echo "<td>
										<span class='edit' >".$program_servis."</span>
										<input type='text' class='txtedit' data-id='".$id."' data-field='program_servis' id='program_servistxt_".$id."' value='".$program_servis."' >
										</td>";
										echo "<td>
										<span class='edit' >".$bonus."</span>
										<input type='text' class='txtedit' data-id='".$id."' data-field='bonus' id='bonustxt_".$id."' value='".$bonus."' >
										</td>";
										echo "</tr>";
									}
									?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
