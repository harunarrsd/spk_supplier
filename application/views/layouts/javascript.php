<script type="text/javascript" src="<?php echo base_url('assets/jquery.js'); ?>"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script> -->
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
<!-- Script -->
<script type="text/javascript">

$(function(){

$.ajaxSetup({
	type:"post",
	cache:false,
	dataType: "json"
})


$(document).on("click","td",function(){
	$(this).find("span[class~='caption']").hide();
	$(this).find("input[class~='editor']").fadeIn().focus();
});


$("#tambah-data").click(function(){
	$.ajax({
		url:"<?php echo base_url('supplier/create'); ?>",
			success: function(a){
			var ele="";
			ele+=`<tr data-id='"+a.id+"'>
			<td><span class='span-nama_supplier caption' data-id='"+a.id+"'>Ketik Disini...</span><input type='text' class='field-nama_supplier form-control editor'  data-id='"+a.id+"' /></td>"
			<td><span class='span-diskon caption' data-id='"+a.id+"'>Ketik Disini... </span> <input type='number' class='field-diskon form-control editor' data-id='"+a.id+"' /></td>"
			<td><span class='span-pelayanan caption' data-id='"+a.id+"'>Ketik Disini...</span> <input type='text' class='field-pelayanan form-control editor'  data-id='"+a.id+"' /></td>"
			<td><span class='span-karoseri caption' data-id='"+a.id+"'>Ketik Disini...</span> <input type='text' class='field-karoseri form-control editor'  data-id='"+a.id+"' /></td>"
			<td><span class='span-program_servis caption' data-id='"+a.id+"'>Ketik Disini...</span> <input type='number' class='field-program_servis form-control editor'  data-id='"+a.id+"' /></td>"
			<td><span class='span-bonus caption' data-id='"+a.id+"'>Ketik Disini...</span> <input type='text' class='field-bonus form-control editor'  data-id='"+a.id+"' /></td>"
			<td><button class='btn btn-sm btn-danger hapus-data' data-id='"+a.id+"'><i class='fa fa-close'></i> Hapus</button></td>"
			</tr>`;

			var element=$(ele);
			element.hide();
			element.prependTo("#table-body").fadeIn(1500);

		}
	});
});

$(document).on("keydown",".editor",function(e){
	if(e.keyCode==13){
		var target=$(e.target);
		var value=target.val();
		var id=target.attr("data-id");
		var data={id:id,value:value};
		if(target.is(".field-nama_supplier")){
		data.modul="nama_supplier";
		}else if(target.is(".field-diskon")){
		data.modul="diskon";
		}else if(target.is(".field-pelayanan")){
		data.modul="pelayanan";
		}else if(target.is(".field-karoseri")){
		data.modul="karoseri";
		}else if(target.is(".field-program_servis")){
		data.modul="program_servis";
		}else if(target.is(".field-bonus")){
		data.modul="bonus";
		}

		$.ajax({
			data:data,
			url:"<?php echo base_url('supplier/update_alternatif'); ?>",
			success: function(a){
				target.hide();
				target.siblings("span[class~='caption']").html(value).fadeIn();
				window.location.href = '<?php echo base_url('supplier');?>';
			}

		})

	}

});


$(document).on("click",".hapus-data",function(){
	var id=$(this).attr("data-id");
	var id_sk=$(this).attr("data-id_sk");
	swal({
		title:"Hapus data",
		text:"Yakin akan menghapus Data ini?",
		type: "warning",
		showCancelButton: true,
		confirmButtonText: "Hapus",
		closeOnConfirm: true,
	},
		function(){
		 $.ajax({
			url:"<?php echo base_url('supplier/delete_alternatif'); ?>",
			data:{id:id,id_sk:id_sk},
			success: function(){
				$("tr[data-id='"+id+"']").fadeOut("fast",function(){
					$(this).remove();
					swal('','Data Berhasil dihapus!','success');
				});
			}
		 });
	});
});

$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );

});

</script>
