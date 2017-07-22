jQuery(document).ready(function(e){
	var dormitorytype = "",
		purpose = "";

	$('#input[name=dormitorytype]').on('select', function(e) {
		console.log($(this).val());
	});
	
	$('#send-consultation').on("click", function(e){
		dormitorytype = $('input[name=dormitorytype]:checked').val();
		dormitorytype = (dormitorytype == "기타" ? $('#dormitorytypeother').val(): dormitorytype);

		purpose = $('input[name=purpose]:checked').val();
		purpose = (purpose == "기타" ? $('#purposeother').val(): purpose);

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
