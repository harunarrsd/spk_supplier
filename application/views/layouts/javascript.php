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
			ele+="<tr data-id='"+a.id+"'>";
			ele+="<td><span class='span-nama caption' data-id='"+a.id+"'></span> <input type='text' class='field-nama form-control editor'  data-id='"+a.id+"' /></td>";
			ele+="<td><span class='span-diskon caption' data-id='"+a.id+"'></span> <input type='text' class='field-diskon form-control editor' data-id='"+a.id+"' /></td>";
			ele+="<td><span class='span-pelayanan caption' data-id='"+a.id+"'></span> <input type='text' class='field-pelayanan form-control editor'  data-id='"+a.id+"' /></td>";
			ele+="<td><span class='span-karoseri caption' data-id='"+a.id+"'></span> <input type='text' class='field-karoseri form-control editor'  data-id='"+a.id+"' /></td>";
			ele+="<td><span class='span-program_servis caption' data-id='"+a.id+"'></span> <input type='text' class='field-program_servis form-control editor'  data-id='"+a.id+"' /></td>";
			ele+="<td><span class='span-bonus caption' data-id='"+a.id+"'></span> <input type='text' class='field-bonus form-control editor'  data-id='"+a.id+"' /></td>";
			ele+="<td><button class='btn btn-xs btn-danger hapus-data' data-id='"+a.id+"'><i class='glyphicon glyphicon-remove'></i> Hapus</button></td>";
			ele+="</tr>";

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
	if(target.is(".field-nama")){
	data.modul="nama";
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
			url:"<?php echo base_url('supplier/update'); ?>",
			success: function(a){
			target.hide();
			target.siblings("span[class~='caption']").html(value).fadeIn();
			}

		})

	}

});


$(document).on("click",".hapus-data",function(){
	var id=$(this).attr("data-id");
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
			url:"<?php echo base_url('supplier/delete'); ?>",
			data:{id:id},
			success: function(){
				$("tr[data-id='"+id+"']").fadeOut("fast",function(){
					$(this).remove();
				});
			}
		 });
	});
});

});

</script>
