$(document).ready(function(){


//##################################################################################

$(".abc").click(function(){

	var form = $(this).parent('form').attr('id');
	//console.log($("#"+form).serialize());


	$.ajax({
		type: "POST",
		url: base_url+"main/test",
		data:$("#"+form).serialize(),
		cache: false,
		success:
			function(data){
				if (data == 'TRUE') {
					alert('Inserted successfuly');
					location.reload();
				}
				else{
					alert('Error!');
				}
			}
	});


return false;
});



//##################################################################################

$('.comm_id a').click(function(){

	var data = {comm_id:($(this).attr('rel'))};

		$.ajax({
				type: "POST",
				url: base_url+"main/comm_del",
				data:data,
				cache: false,
				success:
					function(data){
						if (data == 'TRUE') {
							alert('Removed successfuly!');
							location.reload();
						}
						else{
							alert('Error!');
						}

						//console.log(data);
					}
			});

return false;

});


//##################################################################################

$("#add_album").click(function(){

	//console.log($('#x1').serialize());

	 var str = $("#x1").serialize();

		$.ajax({
		type: "POST",
		url: base_url+"main/add_al",
		data: str,
		cache: false,
		success:
			function(data){
				if(data == 'TRUE') {
					alert('Inserted successfuly');
					location.reload();
				}
				else if(data == 'VFALSE'){
					alert('Insert Again!');
				}
				else{
					alert('Error!');
				}
				//console.log(data);
			}
	});

return false;

});


//##################################################################################

$('.remove_album a').click(function(){

	var datax = {remove_album:($(this).attr('rel'))};

		$.ajax({
				type: "POST",
				url: base_url+"main/del_album",
				data:datax,
				cache: false,
				success:
					function(data){
						if (data == 'TRUE') {
							alert('Removed successfuly!');
							location.reload();
						}
						else{
							alert('Error!');
						}
						//console.log(data);
					}
			});

return false;

});


//##################################################################################


// $("#up_img").click(function(){

// 	//console.log($("#up_frm").serialize());
	
// 		$.ajax({
// 		type: "POST",
// 		url: base_url+"main/insert_images",
// 		data:$("#up_frm").serialize(),
// 		cache: false,
// 		success:
// 			function(data){
// 				if(data == 'TRUE') {
// 					alert('Uploaded successfuly');
// 					location.reload();
// 				}
				
// 				else{
// 					alert('Error!');
// 				}
// 				//console.log(data);
// 			}
// 	});

// return false;

// });


//##################################################################################



//##################################################################################
//##################################################################################
//##################################################################################
//##################################################################################
//##################################################################################
//##################################################################################








});