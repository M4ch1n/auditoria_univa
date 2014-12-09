

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
	
	if(data.length < $('#hdnTotalQuestions').val()) {
		alert("Faltan campos por llenar!");
		return false;
	}

	var myData = {
		survey : data,
	}

	console.log(data);

	$.ajax({
		type : "POST",
		url: '../logic/survey.php',
		dataType : "html",
		data: myData,
		success: function(data) {
			console.log(data);
			$('#container').html(data);
			
		},
		failure: function(){ alert("Error!!!");}
	});
}

