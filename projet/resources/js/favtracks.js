import $ from 'jquery';


	$('body').on('click','.favsong', function(){
		var id = $(this).attr('data-id');
		console.log(id);
		$.ajax({
			url: '/track-delete', 
			type: 'POST',
			data: 'id='+id,
			success: function(data){
		            console.log(id);
			}
		});
	});