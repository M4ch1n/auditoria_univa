

$(function() {

	$('#submitSurvey').on('click', function() {
		
		getAnswer();	

		//console.log(data);
	});

});


function getAnswer(){

	var data = [];
		
	$('#frmSurvey input[type=radio]').each(function() {

		if($(this).is(':checked')) {

			var answer = $(this).attr('id').split('_');
			var question = $(this).attr('name').split('_');

			data.push(
				{"question" : question[1], "answer" : answer[1]}
			);
		}			
	});

	
	console.log(data);
	
	//$( "#frmSurvey" ).submit();


	$.ajax({
		url: '../logic/survey.php',
		type: 'post',
		data: data,
		function(response) {
			console.log("Response " + response);
		}
	})
}

