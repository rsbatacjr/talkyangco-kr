$(document).ready(function(e){
	$('#send-consultation').on("click", function(e){
		$.ajax({
			url: adminajax,
			type: "POST",
			data: {
				studentname: $('#studentname').val(),
				englishname: $('#englishname').val(),
				email: $('#email').val(),
				country: $('#country').val(),
				phone: $('#phone').val(),
				gender: $('input[name=gender]:checked').val(),
				age: $('#age').val(),
				program: $('#program').val(),
				dormitory: $('#dormitory').val(),
				dormitorytype: $('input[name=dormitorytype]:checked').val(),
				purpose: $('input[name=purpose]:checked').val(),
				currentenglevel: $('#currentenglevel').val(),
				budget: $('#budget').val(),
				learningexperience: $('input[name=learningexperience]:checked').val(),
				trainingperiod: $('#trainingperiod').val(),
				others: $('#others').val()
			},
			success: function(e) {
				alert('success');
				window.location.reload();
			}
		})
	})
});
