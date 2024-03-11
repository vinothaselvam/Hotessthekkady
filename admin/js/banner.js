$(document).ready(function(){
	var categoryData = $('#bannerListing').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		 "bFilter": false,
        "bInfo": false,
		"order":[],
		"ajax":{
			url:"manage_banners.php",
			type:"POST",
			data:{action:'bannerListing'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[0, 2, 3],
				"orderable":false,
			},
		],
		"pageLength": 10
	});		
	$(document).on('click', '.delete', function(){
		var categoryId = $(this).attr("id");		
		var action = "bannerDelete";
		if(confirm("Are you sure you want to delete this category?")) {
			$.ajax({
				url:"manage_banners.php",
				method:"POST",
				data:{categoryId:categoryId, action:action},
				success:function(data) {					
					categoryData.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
});